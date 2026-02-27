<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactNotificationMail;
use App\Models\Setting;
class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'message' => 'required',
        ]);

        $contact = Contact::create($request->all());

        // Lấy email admin từ settings
        $settings = Setting::first();

        Mail::to($settings->email ?? config('mail.from.address'))
            ->send(new ContactNotificationMail($contact));

        return back()->with('success', 'Đã gửi liên hệ thành công');
    }
}
