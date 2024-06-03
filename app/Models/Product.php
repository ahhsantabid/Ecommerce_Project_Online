<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'product_name',
        'product_price',
        'product_discription',
        'product_qty',
        'product_category',
        'product_img',

        
    ];

    use HasFactory;
}
