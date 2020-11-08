<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAddressRequest;
use App\Http\Requests\StoreChildrenRequest;
use App\Models\Address;
use App\Models\Children;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use function abort_if;
use function dd;
use function redirect;
use function view;

class CustomerWizardController extends Controller
{
    public function showAddPickupAddressForm(Request $request)
    {
        $title = Role::where('id', Auth::id())->first()->title;

        abort_if($title != "Customer", Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.wizard.customer.pickup');
    }

    public function storePickupAddressForm(StoreAddressRequest $request)
    {
        $address = Address::create($request->all());
        $user = User::where('id', \auth()->id())->first();
        $user->pickup_address_id = $address->id;
        $user->save();

        return view('admin.wizard.customer.dropoff');
    }

    public function storeDropoffAddressForm(StoreAddressRequest $request)
    {
        $address = Address::create($request->all());

        $user = User::where('id', \auth()->id())->first();
        $user->dropoff_address_id = $address->id;
        $user->save();

        return view('admin.wizard.customer.child');
    }

    public function storeChildForm(StoreChildrenRequest $request)
    {
        $children = Children::create($request->all());
        $children->parent_id = \auth()->id();
        $children->save();

        return redirect()->route('admin.home');
    }
    //TODO
    //1. Add Pickup Address
    //2. Add Drop off Address
    //3. Child Information
    //...

}
