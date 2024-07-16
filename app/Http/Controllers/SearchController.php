<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Hoặc mô hình tương ứng với dữ liệu của bạn

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('q');

        // Giả sử bạn muốn tìm kiếm trong bảng Product
        $products = Product::where('name', 'like', '%' . $query . '%')
            ->orWhere('description', 'like', '%' . $query . '%')
            ->get();

        return view('posts.search_results', compact('products'));
    }
}
