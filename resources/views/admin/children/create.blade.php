@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.create') }} {{ trans('cruds.children.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{route('admin.children.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="required" for="street">{{ trans('cruds.children.fields.full_name') }}</label>
                    <input class="form-control {{ $errors->has('full_name') ? 'is-invalid' : '' }}" type="text"
                           name="full_name" id="full_name" value="{{ old('full_name', '') }}" required>
                    @if($errors->has('full_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('full_name') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="required" for="street">{{ trans('cruds.children.fields.IC_number') }}</label>
                    <input class="form-control {{ $errors->has('IC_number') ? 'is-invalid' : '' }}" type="text"
                           name="IC_number" id="IC_number" value="{{ old('IC_number', '') }}" required>
                    @if($errors->has('IC_number'))
                        <div class="invalid-feedback">
                            {{ $errors->first('IC_number') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="required" for="street">{{ trans('cruds.children.fields.school_name') }}</label>
                    <input class="form-control {{ $errors->has('school_name') ? 'is-invalid' : '' }}" type="text"
                           name="school_name" id="school_name" value="{{ old('school_name', '') }}" required>
                    @if($errors->has('school_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('school_name') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="pickup_address_id">{{ trans('cruds.children.fields.pickup_address') }}</label>
                    <select class="form-control select2 {{ $errors->has('pickup_address_id') ? 'is-invalid' : '' }}" required
                            name="pickup_address_id" id="pickup_address_id">
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
                    <select class="form-control select2 {{ $errors->has('dropoff_address_id') ? 'is-invalid' : '' }}" required
                            name="dropoff_address_id" id="dropoff_address_id">
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
                    <button class="btn btn-info" type="submit">
                        {{ trans('global.next') }}
                    </button>
                </div>
            </form>
        </div>
    </div>



@endsection
