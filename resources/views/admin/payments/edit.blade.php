@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.payment.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.payments.update", [$payment->id]) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label class="required" for="total_received">{{ trans('cruds.payment.fields.total_received') }}</label>
                    <input class="form-control {{ $errors->has('total_received') ? 'is-invalid' : '' }}" type="number" name="total_received" id="total_received" value="{{ old('total_received', $payment->total_received) }}" step="0.01" required>
                    @if($errors->has('total_received'))
                        <div class="invalid-feedback">
                            {{ $errors->first('total_received') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.payment.fields.total_received_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="rider_received">{{ trans('cruds.payment.fields.rider_received') }}</label>
                    <input class="form-control {{ $errors->has('rider_received') ? 'is-invalid' : '' }}" type="number" name="rider_received" id="rider_received" value="{{ old('rider_received', $payment->rider_received) }}" step="0.01" required>
                    @if($errors->has('rider_received'))
                        <div class="invalid-feedback">
                            {{ $errors->first('rider_received') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.payment.fields.rider_received_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="office_received">{{ trans('cruds.payment.fields.office_received') }}</label>
                    <input class="form-control {{ $errors->has('office_received') ? 'is-invalid' : '' }}" type="number" name="office_received" id="office_received" value="{{ old('office_received', $payment->office_received) }}" step="0.01" required>
                    @if($errors->has('office_received'))
                        <div class="invalid-feedback">
                            {{ $errors->first('office_received') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.payment.fields.office_received_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="user_id">{{ trans('cruds.payment.fields.user') }}</label>
                    <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id" required>
                        @foreach($users as $id => $user)
                            <option value="{{ $id }}" {{ (old('user_id') ? old('user_id') : $payment->user->id ?? '') == $id ? 'selected' : '' }}>{{ $user }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('user'))
                        <div class="invalid-feedback">
                            {{ $errors->first('user') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.payment.fields.user_helper') }}</span>
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
