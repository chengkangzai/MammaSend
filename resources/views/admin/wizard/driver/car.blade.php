@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            Secondly, we need to know what kind of car you have...
        </div>

        <div class="card-body">
            <form method="POST" action="{{route('admin.wizard.driver.car')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="required">{{ trans('cruds.vehicle.fields.body_type') }}</label>
                    <select class="form-control {{ $errors->has('body_type') ? 'is-invalid' : '' }}" name="body_type"
                            id="body_type"
                            required>
                        <option value disabled {{ old('body_type', null) === null ? 'selected' : '' }}>
                            {{ trans('global.pleaseSelect') }}
                        </option>
                        @foreach(App\Models\Vehicle::BODY_TYPE_SELECT as $key => $label)
                            <option value="{{ $key }}" {{ old('body_type', '') === (string) $key ? 'selected' : '' }}>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                    @if($errors->has('body_type'))
                        <div class="invalid-feedback">
                            {{ $errors->first('body_type') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="required">{{ trans('cruds.vehicle.fields.manufacturer') }}</label>
                    <select class="form-control {{ $errors->has('manufacturer') ? 'is-invalid' : '' }}"
                            name="manufacturer" id="manufacturer"
                            required>
                        <option value disabled {{ old('manufacturer', null) === null ? 'selected' : '' }}>
                            {{ trans('global.pleaseSelect') }}
                        </option>
                        @foreach(App\Models\Vehicle::MANUFACTURER_SELECT as $key => $label)
                            <option
                                value="{{ $key }}" {{ old('manufacturer', '') === (string) $key ? 'selected' : '' }}>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                    @if($errors->has('manufacturer'))
                        <div class="invalid-feedback">
                            {{ $errors->first('manufacturer') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="required" for="model">{{ trans('cruds.vehicle.fields.model') }}</label>
                    <input class="form-control {{ $errors->has('model') ? 'is-invalid' : '' }}" type="text"
                           name="model" id="model" value="{{ old('model', '') }}" required>
                    @if($errors->has('model'))
                        <div class="invalid-feedback">
                            {{ $errors->first('model') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="required" for="variant">{{ trans('cruds.vehicle.fields.variant') }}</label>
                    <input class="form-control {{ $errors->has('variant') ? 'is-invalid' : '' }}" type="text"
                           name="variant" id="variant" value="{{ old('variant', '') }}" required>
                    @if($errors->has('variant'))
                        <div class="invalid-feedback">
                            {{ $errors->first('variant') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="required">{{ trans('cruds.vehicle.fields.color') }}</label>
                    <select class="form-control {{ $errors->has('color') ? 'is-invalid' : '' }}" name="color" id="color"
                            required>
                        <option value disabled {{ old('color', null) === null ? 'selected' : '' }}>
                            {{ trans('global.pleaseSelect') }}
                        </option>
                        @foreach(App\Models\Vehicle::COLOR_SELECT as $key => $label)
                            <option value="{{ $key }}" {{ old('color', '') === (string) $key ? 'selected' : '' }}>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                    @if($errors->has('color'))
                        <div class="invalid-feedback">
                            {{ $errors->first('color') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="required" for="car_plate">{{ trans('cruds.vehicle.fields.car_plate') }}</label>
                    <input class="form-control {{ $errors->has('car_plate') ? 'is-invalid' : '' }}" type="text"
                           name="car_plate" id="car_plate" value="{{ old('car_plate', '') }}" required>
                    @if($errors->has('car_plate'))
                        <div class="invalid-feedback">
                            {{ $errors->first('car_plate') }}
                        </div>
                    @endif
                </div>

                <input type="text" value="{{auth()->id()}}" name="rider_id" hidden>
                <div class=" form-group">
                <button class="btn btn-info" type="submit">
                    {{ trans('global.next') }}
                </button>
        </div>
        </form>
    </div>
    </div>
@endsection


@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        $("#start_date").datepicker({});
        $("#end_date").datepicker({});
    </script>
@endsection
