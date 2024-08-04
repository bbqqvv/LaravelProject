<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        if ($products->count() > 0) {
            return ProductResource::collection($products);
        } else {
            return response()->json(['message' => 'No record available'], 200);
        }
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'sizes' => 'required',
            'colors' => 'required',
            'warranty_policy' => 'required',
            'cost_origin' => 'required|numeric',
            'sale' => 'required|numeric',
            'price' => 'required|numeric',
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id', // Thêm dòng này vào để xác thực category_id
            'status' => 'required|string',

        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'All fields are mandatory',
                'errors' => $validator->messages()
            ], 422);
        }
    

        $data = $request->all();

        // Xử lý upload hình ảnh
        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $image) {
                $path = $image->store('public/images');
                $images[] = $path;
            }
            $data['images'] = json_encode($images); // Lưu đường dẫn hình ảnh dưới dạng JSON
        }

        $product = Product::create($data);

        return response()->json([
            'message' => 'Product Created Successfully',
            'data' => new ProductResource($product)
        ], 200);
    }



    public function show(Product $id)
    {
        return new ProductResource($id);
    }
    public function edit(Request $request, Product $id)
    {
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'warranty_policy' => 'required',
            'sizes' => 'required',
            'colors' => 'required',
            'status' => 'required|integer',
            'cost_origin' => 'required|numeric',
            'sale' => 'required|numeric',
            'price' => 'required|numeric',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id', // Thêm dòng này vào để xác thực category_id

            'stock' => 'required|integer',
            
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'All fields are mandatory',
                'errors' => $validator->messages()
            ], 422);
        }

        // Lấy đối tượng Product từ cơ sở dữ liệu
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'message' => 'Product not found'
            ], 404);
        }

        $data = $request->all();

        // Xử lý upload hình ảnh
        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $image) {
                $path = $image->store('public/images');
                $images[] = $path;
            }
            $data['images'] = json_encode($images); // Cập nhật đường dẫn hình ảnh dưới dạng JSON
        }

        // Cập nhật thông tin của sản phẩm
        $product->update($data);

        return response()->json([
            'message' => 'Product Updated Successfully',
            'data' => new ProductResource($product)
        ], 200);
    }


    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'message' => 'Product not found'
            ], 404);
        }

        $product->delete();

        return response()->json([
            'message' => 'Product deleted successfully'
        ], 200);
    }
}
