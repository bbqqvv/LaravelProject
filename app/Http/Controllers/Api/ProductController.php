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
            'warranty_policy' => 'required',
            'cost_origin' => 'required|numeric',
            'cost_sale' => 'required|numeric',
            'price' => 'required|numeric',
            'quantity' => 'required',
            'image' => 'required|image',
            'stock' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'All fields are mandatory',
                'errors' => $validator->messages()
            ], 422);
        }

        $product = Product::create($request->all());

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
            'status' => 'required|integer',
            'cost_origin' => 'required|numeric',
            'cost_sale' => 'required|numeric',
            'price' => 'required|numeric',
            'quantity' => 'required',
            'image' => 'required|image',
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

        // Cập nhật thông tin của sản phẩm
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'warranty_policy' => $request->warranty_policy,
            'status' => $request->status,
            'cost_origin' => $request->cost_origin,
            'cost_sale' => $request->cost_sale,
            'price' => $request->price,
            'quantity' => $request->quantity,

            'image' => $request->image,
            'stock' => $request->stock,
        ]);

        return response()->json([
            'message' => 'Product Update Successfully',
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
