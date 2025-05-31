<?php

namespace App\Models;

use App\Models\Traits\ProvinceTrait;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{

    use ProvinceTrait;

    protected $table = 'provinces';
    
    /**
     * Province has many regencies.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function regencies()
    {
        return $this->hasMany(Regency::class);
    }
}
