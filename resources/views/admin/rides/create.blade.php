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
                    <select class="form-control select2 {{ $errors->has('rider') ? 'is-invalid' : '' }}" name="rider_id" id="rider_id" required>
                        @foreach($riders as $id => $rider)
                            <option value="{{ $id }}" {{ old('rider_id') == $id ? 'selected' : '' }}>{{ $rider }}</option>
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
                    <button class="btn btn-danger" type="submit">
                        {{ trans('global.save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>



@endsection
