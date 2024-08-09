<?php

// app/Http/Controllers/OrderController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('items')->get();
        return response()->json($orders);
    }

    public function update(Request $request, Order $order)
    {
        $order->update(['status' => $request->status]);
        return response()->json(['message' => 'Order status updated successfully']);
    }
}
