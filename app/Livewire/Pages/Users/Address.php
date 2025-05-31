<?php

namespace App\Livewire\Pages\Users;

use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\UserAddress;
use App\Models\Village;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Address extends Component
{
    use WithPagination;
    use AddressRules;
    use AddressLoad;

    // PUBLIC
    public $user_id;
    public $search;


    // SAVE_DATA
    public function save()
    {
        $this->validate();
        try {
            //code...
            UserAddress::create([
                "username" => $this->username,
                "phone" => $this->phone,
                "detail" => $this->detail,
                "province" => $this->province,
                "regencies" => $this->regency,
                "districts" => $this->districts,
                "villages" => $this->village,
                "postal_code" => $this->postalCode,
                "is_primary" => $this->isPrimary,

                "province_id" => $this->province_id,
                "regencies_id" => $this->regency_id,
                "districts_id" => $this->districts_id,
                "villages_id" => $this->village_id,
                "user_id" => $this->user_id,
            ]);
            $this->clearInput();
            $this->dispatch('addressModalHide');
            $this->dispatch('success', 'Alamat anda berhasil ditambahkan!');
        } catch (\Throwable $th) {
            //throw $th;
            $this->dispatch('error', 'Alamat anda gagal ditambahkan!');
        }
    }


    // EDIT
    public $user_address_id, $is_edit = false;
    public function editAddress($id)
    {
        $data = UserAddress::find($id);
        $this->username =  $data->username;
        $this->phone =  $data->phone;
        $this->detail =  $data->detail;
        $this->province =  $data->province;
        $this->regency =  $data->regencies;
        $this->districts =  $data->districts;
        $this->village =  $data->villages;
        $this->postalCode =  $data->postal_code;
        $this->isPrimary =  $data->is_primary;
        $this->province_id =  $data->province_id;
        $this->regency_id =  $data->regencies_id;
        $this->districts_id =  $data->districts_id;
        $this->village_id =  $data->villages_id;
        $this->is_edit = true;
        $this->user_address_id = $id;
        $this->dispatch('addressModalShow');
    }
    public function update()
    {
        $this->validate();
        try {
            //code...
            UserAddress::find($this->user_address_id)
            ->update([
                "username" => $this->username,
                "phone" => $this->phone,
                "detail" => $this->detail,
                "province" => $this->province,
                "regencies" => $this->regency,
                "districts" => $this->districts,
                "villages" => $this->village,
                "postal_code" => $this->postalCode,
                "is_primary" => $this->isPrimary,

                "province_id" => $this->province_id,
                "regencies_id" => $this->regency_id,
                "districts_id" => $this->districts_id,
                "villages_id" => $this->village_id,
                "user_id" => $this->user_id,
            ]);
            $this->clearInput();
            $this->dispatch('addressModalHide');
            $this->dispatch('success', 'Alamat anda berhasil ditambahkan!');
        } catch (\Throwable $th) {
            //throw $th;
            $this->dispatch('error', 'Alamat anda gagal ditambahkan!');
        }
    }


    // DELETE
    #[On('setDeleteAddress')]
    public function deleteAddress($id)
    {
        try {
            //code...
            UserAddress::find($id)->delete();
            $this->dispatch('success', 'Alamat anda berhasil dihapus!');
        } catch (\Throwable $th) {
            //throw $th;
            $this->dispatch('error', 'Alamat anda gagal dihapus!');
        }
    }

    // CLEAR_INPUT
    public function clearInput()
    {
        $this->username = null;
        $this->phone = null;
        $this->detail = null;
        $this->province = null;
        $this->regency = null;
        $this->districts = null;
        $this->village = null;
        $this->postalCode = null;
        $this->isPrimary = null;
        $this->province_id = null;
        $this->regency_id = null;
        $this->districts_id = null;
        $this->village_id = null;
        $this->isPrimary = false;
        $this->is_edit = false;
    }


    // RENDER
    public function render()
    {
        $this->getFromDatas();
        // ADDRESS_USER_DATA
        $userAddress = UserAddress::where('user_id', $this->user_id)->search($this->search)->paginate(10);
        return view('livewire.pages.users.address', [
            'userAddress' => $userAddress
        ]);
    }
}
