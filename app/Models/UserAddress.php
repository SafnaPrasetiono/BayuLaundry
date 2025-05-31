<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $table = 'user_addresses';

    protected $primaryKey = 'user_address_id';

    protected $fillable = [
        'username',
        'phone',
        'detail',
        'province',
        'regencies',
        'districts',
        'villages',
        'postal_code',
        'is_primary',

        'province_id',
        'regencies_id',
        'districts_id',
        'villages_id',
        'user_id',
    ];

    protected $casts = [
        'is_primary' => 'boolean',
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeSearch($query, $param)
    {
        $param = "%" . $param ."%";

        return $query->where(function($q) use ($param) {
            $q->where('username', 'like', $param)
            ->orWhere('phone', 'like', $param)
            ->orWhere('detail', 'like', $param)
            ->orWhere('province', 'like', $param)
            ->orWhere('regencies', 'like', $param)
            ->orWhere('districts', 'like', $param)
            ->orWhere('villages', 'like', $param)
            ->orWhere('postal_code', 'like', $param);
        });

    }
}
