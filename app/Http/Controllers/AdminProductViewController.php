<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductViewController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.posts.list-products', compact('products'));
    }

    public function create()
    {
        return view('admin.posts.add-products');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        // Xử lý logic để lấy thông tin sản phẩm cần chỉnh sửa và trả về view để hiển thị form chỉnh sửa
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }
}
