<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $primaryKey = 'product_id';

    protected $fillable = [
        'title',
        'slug',
        'price',
        'status',
        'discount',
        'dateDiscountStart',
        'dateDiscountEnd',
        'dateProduct',
        'description',
        'price_other',
        'images',
    ];

    protected $casts = [
        'descriptionList' => 'array',
    ];

    // GAK_KEPAKE
    // protected function discounter($price, $discount){
    //     $hasil = $price - (($price * $discount) / 100);
    //     return $hasil;
    // }
}
