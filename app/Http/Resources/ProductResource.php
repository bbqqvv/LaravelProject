<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'status' => $this->status,
            'sizes' =>  $this->sizes,
            'colors' => $this->colors,
            'description' => $this->description,
            'warranty_policy' => $this->warranty_policy,
            'cost_origin' => $this->cost_origin,
            'sale' => $this->sale,
            'price' => $this->price,
            'images' => $this->images,
            'stock' => $this->stock,
            'slug' => $this->slug,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
