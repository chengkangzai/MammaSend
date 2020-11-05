<?php


namespace App\Services;


use App\Models\Address;

class AddressService
{
    public function getFullAddress(Address $address)
    {
        return $address->street .", ". $address->city .", ". $address->zip_code .", ". $address->state;
    }
}
