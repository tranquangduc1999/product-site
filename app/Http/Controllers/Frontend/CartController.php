<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $cart = session()->get('cart', []);

        $key = $request->product_id . '-' . ($request->variant_id ?? 0);

        if (isset($cart[$key])) {
            $cart[$key]['quantity'] += 1;
        } else {
            $cart[$key] = [
                'product_id' => $request->product_id,
                'variant_id' => $request->variant_id,
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);

        return back()->with('success', 'Đã thêm vào giỏ hàng');
    }

    public function index()
    {
        $cart = session()->get('cart', []);
        return view('frontend.cart.index', compact('cart'));
    }

    public function remove($key)
    {
        $cart = session()->get('cart', []);
        unset($cart[$key]);
        session()->put('cart', $cart);

        return back();
    }

    /**
     * Trang checkout
     */
    public function showCheckout()
    {
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->route('cart.index');
        }

        return view('frontend.cart.checkout', compact('cart'));
    }

    /**
     * Xử lý tạo đơn hàng
     */
    public function checkout(Request $request)
    {
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->route('cart.index');
        }

        $request->validate([
            'customer_name' => 'required',
            'phone' => 'required',
            'payment_method' => 'required|in:cod,bank_transfer',
        ]);

        $total = collect($cart)->sum(function ($item) {
            return $item['price'] * $item['quantity'];
        });

        $order = Order::create([
            'order_code'     => 'ORD' . time(),
            'customer_name'  => $request->customer_name,
            'phone'          => $request->phone,
            'email'          => $request->email,
            'address'        => $request->address,
            'note'           => $request->note,
            'total_amount'   => $total,
            'status'         => 'new',
            'payment_method' => $request->payment_method,
            'payment_status' => 'unpaid',
        ]);

        foreach ($cart as $item) {
            $order->items()->create([
                'product_id'         => $item['product_id'],
                'product_variant_id' => $item['variant_id'],
                'product_name'       => $item['name'],
                'price'              => $item['price'],
                'quantity'           => $item['quantity'],
            ]);
        }

        session()->forget('cart');

        return redirect()->route('order.success', $order->id);
    }

    /**
     * Trang thành công
     */
    public function success($id)
    {
        $order = Order::findOrFail($id);

        return view('frontend.cart.success', compact('order'));
    }
}
