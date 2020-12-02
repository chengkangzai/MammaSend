<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAddressRequest;
use App\Models\Address;
use App\Models\Children;
use App\Services\AddressService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use function abort_if;
use function compact;
use function dd;
use function dump;
use function redirect;
use function view;

class CustomerWizardController extends Controller
{
    public function showAddPickupAddressForm(Request $request)
    {
        //TODO Check if its initial setup is done,
        //TRUE: Bring to Child Show Page and add a button to add child
        //FALSE : Initial Set up
        abort_if(Gate::denies('wizard_customer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');


        return view('admin.wizard.customer.child');
    }

    public function storePickupAddressForm(StoreAddressRequest $request)
    {
        $address = Address::create($request->all());
        $children = Children::where('id', $request->get('child_id'))->first();
        $children->pickup_address_id = $address->id;
        $children->save();

        return view('admin.wizard.customer.dropoff', compact('children'));
    }

    public function storeDropoffAddressForm(StoreAddressRequest $request)
    {
        $address = Address::create($request->all());
        $user = Children::where('id', $request->get('child_id'))->first();
        $user->dropoff_address_id = $address->id;
        $user->save();

        return redirect()->route('admin.home');
    }

    public function storeChildForm(Request $request)
    {
        $children = Children::create($request->all());
        $children->parent_id = \auth()->id();
        $children->save();

        return view('admin.wizard.customer.pickup', compact('children'));
    }

    public function confirm()
    {
        $addresses = Address::orderBy('created_at', 'desc')->take(2)->get();
        $child = Children::orderBy('created_at', 'desc')->first();

        $temp = new AddressService();
        $fullAddress1 = $temp->getFullAddress($addresses[0]);
        $fullAddress2 = $temp->getFullAddress($addresses[1]);

        return view('admin.wizard.customer.confirm', compact('addresses', 'child','fullAddress1','fullAddress2'));
    }
    //TODO
    //1. Add Pickup Address
    //2. Add Drop off Address
    //3. Child Information
    //...

}
