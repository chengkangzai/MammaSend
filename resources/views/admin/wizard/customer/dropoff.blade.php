@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            What is your Drop Off Address ?
        </div>

        <div class="card-body">
            <form method="POST" action="/wizard/customer/dropoff" enctype="multipart/form-data">
                @csrf
                <input hidden name="child_id" type="text" value="{{$children->id}}">
                <div class="form-group">
                    <label class="required" for="street">{{ trans('cruds.address.fields.street') }}</label>
                    <input class="form-control {{ $errors->has('street') ? 'is-invalid' : '' }}" type="text"
                           name="street" id="street" value="{{ old('street', '') }}" required>
                    @if($errors->has('street'))
                        <div class="invalid-feedback">
                            {{ $errors->first('street') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.address.fields.street_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="city">{{ trans('cruds.address.fields.city') }}</label>
                    <input class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" type="text" name="city"
                           id="city" value="{{ old('city', '') }}" required>
                    @if($errors->has('city'))
                        <div class="invalid-feedback">
                            {{ $errors->first('city') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.address.fields.city_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required">{{ trans('cruds.address.fields.state') }}</label>
                    <select class="form-control {{ $errors->has('state') ? 'is-invalid' : '' }}" name="state" id="state"
                            required>
                        <option value disabled {{ old('state', null) === null ? 'selected' : '' }}>
                            {{ trans('global.pleaseSelect') }}</option>
                        @foreach(App\Models\Address::STATE_SELECT as $key => $label)
                            <option
                                value="{{ $key }}" {{ old('state', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('state'))
                        <div class="invalid-feedback">
                            {{ $errors->first('state') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.address.fields.state_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="zip_code">{{ trans('cruds.address.fields.zip_code') }}</label>
                    <input class="form-control {{ $errors->has('zip_code') ? 'is-invalid' : '' }}" type="text"
                           name="zip_code" id="zip_code" value="{{ old('zip_code', '') }}" required>
                    @if($errors->has('zip_code'))
                        <div class="invalid-feedback">
                            {{ $errors->first('zip_code') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.address.fields.zip_code_helper') }}</span>
                </div>
                <div class="form-group">
                    <button class="btn btn-info" type="submit">
                        {{ trans('global.next') }}
                    </button>
                </div>
            </form>
        </div>
    </div>



@endsection
