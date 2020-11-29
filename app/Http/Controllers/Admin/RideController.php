<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyRideRequest;
use App\Http\Requests\StoreRideRequest;
use App\Http\Requests\UpdateRideRequest;
use App\Models\Address;
use App\Models\Ride;
use App\Models\Role;
use App\Models\User;
use App\Services\AddressService;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use function dd;
use function trans;

class RideController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('ride_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $rides = Ride::all();

        return view('admin.rides.index', compact('rides'));
    }

    public function create()
    {
        abort_if(Gate::denies('ride_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $riders = Role::where('title', 'Driver')->first()->users()->get()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        $service = new AddressService();
        $addresses = $service->getAllFullAddress();
        return view('admin.rides.create', compact('riders','addresses'));
    }

    public function store(StoreRideRequest $request)
    {
        $ride = Ride::create($request->all());

        return redirect()->route('admin.rides.index');
    }

    public function edit(Ride $ride)
    {
        abort_if(Gate::denies('ride_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $riders = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $ride->load('rider');
        $service = new AddressService();
        $addresses = $service->getAllFullAddress();
        return view('admin.rides.edit', compact('riders', 'ride','addresses'));
    }

    public function update(UpdateRideRequest $request, Ride $ride)
    {
        $ride->update($request->all());

        return redirect()->route('admin.rides.index');
    }

    public function show(Ride $ride)
    {
        abort_if(Gate::denies('ride_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ride->load('rider');

        $service = new AddressService();
        $dropOffAddress = $ride->dropoff_address_id !== null ? $service->getFullAddress(Address::where('id', $ride->dropoff_address_id)->first()) : " ";
        $pickUpAddress = $ride->pickup_address_id !== null ? $service->getFullAddress(Address::where('id', $ride->pickup_address_id)->first()) : " ";
        return view('admin.rides.show', compact('ride','pickUpAddress','dropOffAddress'));
    }

    public function destroy(Ride $ride)
    {
        abort_if(Gate::denies('ride_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ride->delete();

        return back();
    }

    public function massDestroy(MassDestroyRideRequest $request)
    {
        Ride::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
