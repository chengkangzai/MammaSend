<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRideRequest;
use App\Http\Requests\UpdateRideRequest;
use App\Http\Resources\Admin\RideResource;
use App\Models\Ride;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class RideApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('ride_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new RideResource(Ride::with(['rider'])->get());
    }

    public function store(StoreRideRequest $request)
    {
        $ride = Ride::create($request->all());

        return (new RideResource($ride))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Ride $ride)
    {
        abort_if(Gate::denies('ride_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new RideResource($ride->load(['rider']));
    }

    public function update(UpdateRideRequest $request, Ride $ride)
    {
        $ride->update($request->all());

        return (new RideResource($ride))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Ride $ride)
    {
        abort_if(Gate::denies('ride_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ride->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
