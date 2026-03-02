<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class WarrantyLookupController extends Controller
{
    public function index()
    {
        return view('frontend.warranty.lookup');
    }

    public function search(Request $request)
    {
        $request->validate([
            'phone' => 'required'
        ]);

        $customer = Customer::where('phone', $request->phone)
            ->with('warranties.product')
            ->first();

        return view('frontend.warranty.lookup', compact('customer'));
    }
}
