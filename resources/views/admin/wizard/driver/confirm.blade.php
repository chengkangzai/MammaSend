@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            What is your Living Address (Which will decide your support location) ?
        </div>

        <div class="card-body">
            <form method="POST" action="{{route('admin.wizard.driver.confirm')}}" enctype="multipart/form-data">
                @csrf
                <div>
                    <h3>Please Confirm your information !</h3>
                </div>

                <div class=mt-3">
                    <h4>Licence</h4>
                    <table class="table table-bordered table-striped">
                        <tbody>
                        <tr>
                            <th>
                                {{ trans('cruds.licence.fields.class') }}
                            </th>
                            <td>
                                {{ $licence->class }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.licence.fields.start_date') }}
                            </th>
                            <td>
                                {{ $licence->start_date }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.licence.fields.end_date') }}
                            </th>
                            <td>
                                {{ $licence->end_date }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.licence.fields.IC_number') }}
                            </th>
                            <td>
                                {{ $licence->IC_number }}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class=mt-3">
                    <h4>Vehicle</h4>
                    <table class="table table-bordered table-striped">
                        <tbody>
                        <tr>
                            <th>{{ __('cruds.vehicle.fields.car_plate') }}</th>
                            <td>{{ $vehicle->car_plate }}</td>
                        </tr>
                        <tr>
                            <th>{{ trans('cruds.vehicle.fields.body_type') }}</th>
                            <td>{{ $vehicle->body_type }}</td>
                        </tr>
                        <tr>
                            <th>{{ trans('cruds.vehicle.fields.manufacturer') }}</th>
                            <td>{{ $vehicle->manufacturer }}</td>
                        </tr>
                        <tr>
                            <th>{{ trans('cruds.vehicle.fields.model') }}</th>
                            <td>{{ $vehicle->model }}</td>
                        </tr>
                        <tr>
                            <th>{{ trans('cruds.vehicle.fields.variant') }}</th>
                            <td>{{ $vehicle->variant }}</td>
                        </tr>
                        <tr>
                            <th>{{ trans('cruds.vehicle.fields.color') }}</th>
                            <td>{{ $vehicle->color }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class=mt-3">
                    <h4>Address</h4>
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
                                {{ $fullAddress }}
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
            </form>
        </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
