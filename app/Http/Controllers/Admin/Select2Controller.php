<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Ride;
use App\Services\AddressService;

class Select2Controller extends Controller
{
    public function getRide()
    {
        $rides = Ride::all();
        $collect = collect([]);
        $s = new AddressService();
        foreach ($rides as $ride) {
            $pa = $s->getFullAddress(Address::find($ride->pickup_address_id));
            $dd = $s->getFullAddress(Address::find($ride->dropoff_address_id));
            $collect->push(['id' => $ride->id, 'text' => $pa . " --> " . $dd . " (RM" . $ride->price . ")"]);
        }
        return $collect->toArray();
    }
}
