<?php

namespace App\Livewire\Pages\Users;

use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use Livewire\Attributes\On;

trait AddressLoad
{
    // FOR_USER
    public $username, $phone, $isPrimary = false;

    // FULL_ADDRESS
    public $postalCode, $detail, $latitude, $longitude;
    #[On('setLocation')]
    public function setLocation($lat, $lng, $address)
    {
        $this->latitude = $lat;
        $this->longitude = $lng;
        $this->detail = $address;
    }
    
    // PROVINCE
    public $province, $province_id, $provincefocused = false;
    public function selectProvinces($id, $province)
    {
        $this->province_id = $id;
        $this->province = $province;
        $this->regency = null;
        $this->regency_id = null;
        $this->districts = null;
        $this->districts_id = null;
        $this->village = null;
        $this->village_id = null;
    }

    //REGENCIES(KOTA)
    public $regency, $regency_id, $regencyfocused = false;
    public function selectRegencies($id, $regencie)
    {
        $this->regency_id = $id;
        $this->regency = $regencie;
        $this->districts = null;
        $this->districts_id = null;
        $this->village = null;
        $this->village_id = null;
    }

    //DISTRICT(KOTA)
    public $districts, $districts_id, $districtsfocused = false;
    public function Selectdistricts($id, $regencie)
    {
        $this->districts_id = $id;
        $this->districts = $regencie;
        $this->village = null;
        $this->village_id = null;
    }


    //VILLAGE(ALAMAT)
    public $village, $village_id, $villagefocused = false;
    public function Selectvillage($id, $regencie)
    {
        $this->village_id = $id;
        $this->village = $regencie;
    }

    public $provincesData, $regenciesData, $districtsData, $villageData;
    public function getFromDatas()
    {
        $this->provincesData = Province::where('name', 'like', '%' . $this->province . '%')->get();
        $this->regenciesData = Regency::where('name', 'like', '%' . $this->regency . '%')->where("province_id", $this->province_id)->get();
        $this->districtsData = District::where('name', 'like', '%' . $this->districts . '%')->where("regency_id", $this->regency_id)->get();
        $this->villageData = Village::where('name', 'like', '%' . $this->village . '%')->where("district_id", $this->districts_id)->get();
    }
}