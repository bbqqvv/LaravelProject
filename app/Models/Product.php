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
        'cost_origin',
        'cost_sale',
        'price',
        'quantity',
        'image',
        'stock',
    ];
}
