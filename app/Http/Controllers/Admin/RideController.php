<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyRideRequest;
use App\Http\Requests\StoreRideRequest;
use App\Http\Requests\UpdateRideRequest;
use App\Models\Ride;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
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

        $riders = Role::where('title', 'Rider')->first()->users()->get()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.rides.create', compact('riders'));
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

        return view('admin.rides.edit', compact('riders', 'ride'));
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

        return view('admin.rides.show', compact('ride'));
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
