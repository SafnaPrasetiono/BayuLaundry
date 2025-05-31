<?php

namespace App\Livewire\Pages\Users;

trait AddressRules
{
    protected function rules() 
    {
        return [
            'username' => 'required',
            'phone' => 'required',
            'province' => 'required',
            'regency' => 'required',
            'districts' => 'required',
            'village' => 'required',
            'postalCode' => 'required',
            'detail' => 'required',
        ];
    }

    protected function messages() 
    {
        return [
            'username.required' => 'username tidak boleh kosong',
            'phone.required' => 'phone tidak boleh kosong',
            'province.required' => 'province tidak boleh kosong',
            'regency.required' => 'regency tidak boleh kosong',
            'districts.required' => 'districts tidak boleh kosong',
            'village.required' => 'village tidak boleh kosong',
            'postalCode.required' => 'kode pos tidak boleh kosong',
            'detail.required' => 'detail alamat tidak boleh kosong',
        ];
    }
}