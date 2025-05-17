<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactions extends Model
{
     use HasFactory;

    protected $table = 'transactions';

    protected $primaryKey = 'transaction_id';

    protected $fillable = [
        'username',
        'amount',
        'currency',
        'payment_method',
        'status',
        'description',
        'transaction_date',
        'order_id',
        'user_id',
    ];
}
