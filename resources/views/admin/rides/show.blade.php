@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.show') }} {{ trans('cruds.ride.title') }}
        </div>

        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.rides.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
                <table class="table table-bordered table-striped">
                    <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.ride.fields.id') }}
                        </th>
                        <td>
                            {{ $ride->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ride.fields.rider') }}
                        </th>
                        <td>
                            {{ $ride->rider->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Contact Rider
                        </th>
                        <td>
                            <a class="btn btn-dark" target="_blank" style="border-color: #01E615;background-color:#01E615;color: white "
                               href="https://api.whatsapp.com/send?phone=6{{$ride->rider->phone_number}}&text=Hi Greeting from mamma send !">
                                Contact via WhatsApp
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ride.fields.price') }}
                        </th>
                        <td>
                            {{ $ride->price ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.children.fields.pickup_address') }}
                        </th>
                        <td>
                            {{$pickUpAddress}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.children.fields.pickup_address') }}
                        </th>
                        <td>
                            {{$dropOffAddress}}
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.rides.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            {{ trans('global.show') }} {{ trans('cruds.ride.direction') }}
        </div>
        <div class="card-body">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d7968.295734126245!2d101.6898099765446!3d3.0550717047091793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x31cc4a9324b67dbf%3A0x43b20df5728fa2b!2sVista%20Komanwel%20A%2C%20Jalan%20Jalil%20Perkasa%2019%2C%20Bukit%20Jalil%2C%20Kuala%20Lumpur%2C%20Federal%20Territory%20of%20Kuala%20Lumpur!3m2!1d3.0602582999999997!2d101.68425599999999!4m5!1s0x31cc4abb795025d9%3A0x1c37182a714ba968!2sAPU%20New%20Campus%2C%20Technology%20Park%20Malaysia%2C%2057000%20Kuala%20Lumpur%2C%20Federal%20Territory%20of%20Kuala%20Lumpur%2C%20Malaysia!3m2!1d3.0553453999999998!2d101.70049069999999!5e0!3m2!1sen!2smy!4v1606382577832!5m2!1sen!2smy"
                width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </div>
    </div>
@endsection
