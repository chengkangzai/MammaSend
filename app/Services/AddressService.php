<?php


namespace App\Services;


use App\Models\Address;
use function collect;

class AddressService
{
    public function getFullAddress(Address $address)
    {
        return $address->street .", ". $address->city .", ". $address->zip_code .", ". $address->state;
    }

    public function getAllFullAddress ():array
    {
        $addresses = Address::all();
        $service = new AddressService();
        $temp = collect([]);
        foreach ($addresses as $address) {
            $temp->push($service->getFullAddress($address));
        }
        return $temp->toArray();
    }
}
