<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'cost_origin',
        'cost_sale',
        'cost_sum',
        'slug',
    ];

    // Các tùy chọn khác cho model Category

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug'; // Đặt route key là slug để sử dụng URL thân thiện
    }
}
