<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function showAdmin()
    {
        return view('dummyorderdetail');
    }
        
    public function process(Request $request)
{
    // Validate the request
    $validated = $request->validate([
        'fullname' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'address' => 'required|string',
        'cart' => 'required|array'
    ]);
    
    // Calculate totals
    $subtotal = array_reduce($validated['cart'], function($carry, $item) {
        return $carry + ($item['price'] * $item['quantity']);
    }, 0);
    
    $taxRate = 0.1; // 10%
    $taxAmount = $subtotal * $taxRate;
    $shippingCost = 10000;
    $adminCost = 3000;
    $total = $subtotal + $taxAmount + $shippingCost + $adminCost;

    // Prepare order data
    $order = [
        'customer' => [
            'fullname' => $validated['fullname'],
            'email' => $validated['email'],
            'address' => $validated['address']
        ],
        'items' => $validated['cart'],
        'order_date' => now()->format('Y-m-d H:i:s'),
        'order_number' => 'ORD-' . now()->format('YmdHis'),
        'totals' => [
            'subtotal' => $subtotal,
            'taxAmount' => $taxAmount,
            'shippingCost' => $shippingCost,
            'adminCost' => $adminCost,
            'total' => $total
        ]
    ];
    
    // Store order in session
    Session::put('latest_order', $order);
    
    // Add to order history
    $orderHistory = Session::get('order_history', []);
    array_unshift($orderHistory, $order); // Add new order to beginning
    Session::put('order_history', $orderHistory);
    
    return redirect()->route('order.show');
}

public function showHistory()
{
    $orders = Session::get('order_history', []);
    
    return view('orderhistory', [
        'orders' => $orders
    ]);
}

     public function index()
    {
        $orders = Orders::with('user')->get();
        return view('allorder', compact('orders'));
    }

    public function show()
    {
        // Retrieve the latest order from session
        $order = Session::get('latest_order');
        
        if (!$order) {
            // Handle case where no order exists
            return redirect()->route('home')->with('error', 'No order found');
        }
        
        // Calculate totals (or you can store these in session too)
        $subtotal = array_reduce($order['items'], function($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        }, 0);
        
        $taxRate = 0.1; // 10%
        $taxAmount = $subtotal * $taxRate;
        $shippingCost = 10000; // Example shipping cost
        $adminCost = 3000;
        $total = $subtotal + $taxAmount + $shippingCost + $adminCost;
        
        return view('myorder', [
            'order' => $order,
            'subtotal' => $subtotal,
            'taxAmount' => $taxAmount,
            'shippingCost' => $shippingCost,
            'adminCost' => $adminCost, 
            'total' => $total
        ]);
    }

    public function showOrderDetails($orderNumber)
{
    $orders = Session::get('order_history', []);
    
    // Find the specific order
    $order = collect($orders)->firstWhere('order_number', $orderNumber);
    
    if (!$order) {
        return redirect()->route('order.history')->with('error', 'Order not found');
    }
    
    // Calculate totals (if not already stored in the order)
    $subtotal = array_reduce($order['items'], function($carry, $item) {
        return $carry + ($item['price'] * $item['quantity']);
    }, 0);
    
    $taxAmount = $order['totals']['taxAmount'] ?? $subtotal * 0.1;
    $shippingCost = $order['totals']['shippingCost'] ?? 10000;
    $adminCost = $order['totals']['adminCost'] ?? 3000;
    $total = $order['totals']['total'] ?? $subtotal + $taxAmount + $shippingCost + $adminCost;
    
    return view('orderdetails', [
        'order' => $order,
        'subtotal' => $subtotal,
        'taxAmount' => $taxAmount,
        'shippingCost' => $shippingCost,
        'adminCost' => $adminCost,
        'total' => $total
    ]);

    }  
}
