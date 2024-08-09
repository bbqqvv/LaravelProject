<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
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
        'slug',
    ];

    protected $casts = [
        'images' => 'array', // Tự động chuyển đổi JSON sang mảng và ngược lại
        'colors' => 'array',
        'sizes' => 'array',
    ];


  // Tạo slug từ tên sản phẩm khi lưu vào cơ sở dữ liệu
  public static function boot()
  {
      parent::boot();

      static::creating(function ($product) {
          $product->slug = Str::slug($product->name, '-');
      });

      static::updating(function ($product) {
          $product->slug = Str::slug($product->name, '-');
      });
  }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
