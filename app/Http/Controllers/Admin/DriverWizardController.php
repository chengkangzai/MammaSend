<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreAddressRequest;
use App\Http\Requests\StoreLicencesRequest;
use App\Http\Requests\StoreVehiclesRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use function abort_if;
use function redirect;
use function view;

class DriverWizardController extends Controller
{

    public function index()
    {
        abort_if(Gate::denies('wizard_driver_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');


        return redirect()->route('admin.wizard.driver.index');
    }
    public function initLicence()
    {
        return view('admin.wizard.driver.licence');
    }

    public function storeLicence(StoreLicencesRequest $request)
    {
        return view('admin.wizard.driver.licence');
    }

    public function initCarInfo()
    {

    }
    public function storeCarInfo(StoreVehiclesRequest $request)
    {

    }
    public function initAddress()
    {

    }

    public function storeAddress(StoreAddressRequest $request)
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

