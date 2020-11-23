<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAddressRequest;
use App\Http\Requests\StoreLicencesRequest;
use App\Http\Requests\StoreVehiclesRequest;
use App\Models\Address;
use App\Models\Licence;
use App\Models\Vehicle;
use App\Services\AddressService;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use function abort_if;
use function compact;
use function dd;
use function redirect;
use function view;

class DriverWizardController extends Controller
{

    public function index()
    {
        abort_if(Gate::denies('wizard_driver_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return redirect()->route('admin.wizard.driver.licence');
    }

    public function initLicence()
    {
        return view('admin.wizard.driver.licence');
    }

    public function storeLicence(StoreLicencesRequest $request)
    {
        Licence::create($request->all());

        return redirect()->route('admin.wizard.driver.car');
    }

    public function initCarInfo()
    {
        return view('admin.wizard.driver.car');
    }

    public function storeCarInfo(StoreVehiclesRequest $request)
    {
        Vehicle::create($request->all());

        return redirect()->route('admin.wizard.driver.address');
    }

    public function initAddress()
    {
        return view('admin.wizard.driver.address');
    }

    public function storeAddress(StoreAddressRequest $request)
    {
        Address::create($request->all());

        return redirect()->route('admin.wizard.driver.confirm');
    }

    public function showConfirm()
    {
        $licence = Licence::orderBy('created_at','desc')->first();
        $address = Address::orderBy('created_at','desc')->first();
        $vehicle = Vehicle::orderBy('created_at','desc')->first();
        $temp = New AddressService();
        $fullAddress = $temp->getFullAddress($address);

        return view('admin.wizard.driver.confirm',compact('licence','address','vehicle','fullAddress'));
    }

    public function complete()
    {

    }
    //TODO
    //Initial Setup
    //1. Driving Licence??
    //2. Add Car Information
    //3. Support Location / Address

    //Pickup Process
    //1. List down attendance of ppl by Car Type and their pickup address
    //2. Action : Picked Up,
    //3. Navigate to next location

    //Drop off Process
    //1. List down attendance of ppl by Car Type and their Drop off address
    //2. Action : Dropped Off,
    //3. Navigate to next location
}

