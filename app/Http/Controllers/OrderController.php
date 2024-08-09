<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{


    public function index()
    {
        // Giả sử người dùng hiện tại là 'Nguyễn Văn A'
        $userName = 'Nguyễn Văn A';

        $orders = [
            [
                'id' => 1,
                'customerName' => $userName,
                'address' => '123 Đường ABC, Quận 1, TP.HCM',
                'phoneNumber' => '0123456789',
                'notes' => 'Giao hàng buổi sáng',
                'products' => [
                    ['name' => 'Áo sơ mi', 'price' => 200000],
                    ['name' => 'Áo polo', 'price' => 250000],
                ],
                'status' => 'Đã đặt',
            ],
            [
                'id' => 2,
                'customerName' => $userName,
                'address' => '456 Đường DEF, Quận 2, TP.HCM',
                'phoneNumber' => '0987654321',
                'notes' => 'Giao hàng buổi chiều',
                'products' => [
                    ['name' => 'Áo phông', 'price' => 150000],
                ],
                'status' => 'Đã giao',
            ],
            // Thêm các đơn hàng mẫu khác cho người dùng
        ];

        return view('pages.orders', compact('orders'));
    }
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('order-detail', ['order' => $order]);
    }
}
