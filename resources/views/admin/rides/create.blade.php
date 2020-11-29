@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.create') }} {{ trans('cruds.ride.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.rides.store") }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="required" for="rider_id">{{ trans('cruds.ride.fields.rider') }}</label>
                    <select class="form-control select2 {{ $errors->has('rider') ? 'is-invalid' : '' }}" name="rider_id"
                            id="rider_id" required>
                        @foreach($riders as $id => $rider)
                            <option
                                value="{{ $id }}" {{ old('rider_id') == $id ? 'selected' : '' }}>{{ $rider }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('rider'))
                        <div class="invalid-feedback">
                            {{ $errors->first('rider') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.ride.fields.rider_helper') }}</span>
                </div>

                <div class="form-group">
                    <label class="required" for="price">{{ trans('cruds.ride.fields.price') }}</label>
                    <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="text"
                           name="price" id="price" value="{{ old('price', '') }}" required>
                    @if($errors->has('price'))
                        <div class="invalid-feedback">
                            {{ $errors->first('price') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="pickup_address_id">{{ trans('cruds.children.fields.pickup_address') }}</label>
                    <select class="form-control select2 {{ $errors->has('pickup_address_id') ? 'is-invalid' : '' }}"
                            required name="pickup_address_id" id="pickup_address_id">
                        <option value disabled {{ old('state', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                        @foreach($addresses as $id => $pickup_address)
                            <option value="{{ $id }}">{{ $pickup_address }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('pickup_address_id'))
                        <div class="invalid-feedback">
                            {{ $errors->first('pickup_address_id') }}
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <label for="dropoff_address_id">{{ trans('cruds.children.fields.dropoff_address') }}</label>
                    <select class="form-control select2 {{ $errors->has('dropoff_address_id') ? 'is-invalid' : '' }}"
                            required name="dropoff_address_id" id="dropoff_address_id">
                        <option value disabled {{ old('state', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                        @foreach($addresses as $id => $dropoff_address)
                            <option value="{{ $id }}">{{ $dropoff_address }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('dropoff_address_id'))
                        <div class="invalid-feedback">
                            {{ $errors->first('dropoff_address_id') }}
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        {{ trans('global.save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>



@endsection
