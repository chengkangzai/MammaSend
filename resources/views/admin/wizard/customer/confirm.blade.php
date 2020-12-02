@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            Information Confirmation
        </div>

        <div class="card-body">
            <div>
                <h3>Please Confirm your information !</h3>
            </div>
            @foreach($addresses as $i =>$address)
                <div class=mt-3">
                    @if($i==1)
                        <h4>Pick up Address</h4>
                    @else
                        <h4>Drop Off Address</h4>
                    @endif

                    <table class="table table-bordered table-striped">
                        <tbody>
                        <tr>
                            <th>
                                {{ trans('cruds.address.fields.street') }}
                            </th>
                            <td>
                                {{ $address->street }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.address.fields.city') }}
                            </th>
                            <td>
                                {{ $address->city }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.address.fields.state') }}
                            </th>
                            <td>
                                {{ App\Models\Address::STATE_SELECT[$address->state] ?? '' }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.address.fields.zip_code') }}
                            </th>
                            <td>
                                {{ $address->zip_code }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.address.fields.full_address') }}
                            </th>
                            <td>
                                @if($i==1)
                                    {{$fullAddress1}}
                                @else
                                    {{$fullAddress2}}
                                @endif
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            @endforeach

            <div class="form-group">
                <h4>Children Information</h4>
                <table class="table table-bordered table-striped">
                    <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.children.fields.id') }}
                        </th>
                        <td>
                            {{ $child->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.children.fields.full_name') }}
                        </th>
                        <td>
                            {{ $child->full_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.children.fields.IC_number') }}
                        </th>
                        <td>
                            {{ $child->IC_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.children.fields.school_name') }}
                        </th>
                        <td>
                            {{ $child->school_name }}
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    {{ trans('global.confirm') }}
                </button>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    By clicking "Yes", you are verifying your information is correct
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="{{route('admin.home')}}" type="button" class="btn btn-primary">Yes</a>
                </div>
            </div>
        </div>
    </div>



@endsection
