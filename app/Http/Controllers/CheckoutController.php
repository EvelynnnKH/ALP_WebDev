<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function show(Request $request)
    {
        $cart = $request->input('cart');

        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }

        $taxRate = 0.1; // 10%
        $taxAmount = $subtotal * $taxRate;

        $shippingCost = 10000;
        $adminCost = 3000;

        $total = $subtotal + $taxAmount + $shippingCost + $adminCost;

        // Ambil user yang sedang login
        $user = Auth::user();

        return view('checkout', compact(
            'cart', 'subtotal', 'taxRate', 'taxAmount', 'shippingCost', 'adminCost', 'total', 'user'
        ));
    }
}
