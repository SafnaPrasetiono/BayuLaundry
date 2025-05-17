<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ordersProduct extends Model
{
     use HasFactory;

    protected $table = 'orders_products';

    protected $primaryKey = 'order_product_id';

    protected $fillable = [
        'product_title',
        'product_description',
        'product_price',
        'product_discount',
        'product_weight',
        'product_image',
        'product_total',
        'order_id',
        'product_id',
    ];
}
