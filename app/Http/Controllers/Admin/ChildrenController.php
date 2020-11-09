<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyChildrenRequest;
use App\Http\Requests\StoreChildrenRequest;
use App\Http\Requests\UpdateChildrenRequest;
use App\Models\Address;
use App\Models\Children;
use App\Services\AddressService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use function abort_if;
use function compact;
use function explode;
use function redirect;
use function request;
use function response;
use function view;

class ChildrenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        abort_if(Gate::denies('child_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $children = Children::all();

        return view('admin.children.index', compact('children'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        abort_if(Gate::denies('child_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $service = new AddressService();
        $addresses = $service->getAllFullAddress();
        return view('admin.children.create', compact('addresses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreChildrenRequest $request)
    {
        Children::create($request->all());

        return redirect()->route('admin.children.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Children $children
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Request $request)
    {
        abort_if(Gate::denies('child_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $id = explode("/", $request->getUri())[4];
        $child = Children::find($id);

        $service = new AddressService();
        $dropOffAddress = $child->dropoff_address_id !== null ? $service->getFullAddress(Address::where('id', $child->dropoff_address_id)->first()) : " ";
        $pickUpAddress = $child->pickup_address_id !== null ? $service->getFullAddress(Address::where('id', $child->pickup_address_id)->first()) : " ";

        return view('admin.children.show', compact('child', 'dropOffAddress', 'pickUpAddress'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Request $request)
    {
        abort_if(Gate::denies('child_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $id = explode("/", $request->getUri())[4];
        $children = Children::find($id);

        $service = new AddressService();
        $addresses = $service->getAllFullAddress();

        return view('admin.children.edit', compact('children', 'addresses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Children $children
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateChildrenRequest $request, Children $children)
    {
        $id = explode("/", $request->getUri())[4];
        $children = Children::find($id);
        $children->update($request->all());

        return redirect()->route('admin.children.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Children $children
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $id = explode("/", $request->getUri())[4];
        $children = Children::find($id);
        $children->delete();

        return redirect()->route('admin.children.index');
    }

    public function massDestroy(MassDestroyChildrenRequest $request)
    {
        Children::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
