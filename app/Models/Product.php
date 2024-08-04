<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'warranty_policy',
        'status',
        'colors',
        'sizes',
        'cost_origin',
        'sale',
        'price',
        'category_id',
        'images',
        'stock',
    ];

    protected $casts = [
        'images' => 'array', // Tự động chuyển đổi JSON sang mảng và ngược lại
        'colors' => 'array',
        'sizes' => 'array',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
