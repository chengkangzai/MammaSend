@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.address.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.addresses.update", [$address->id]) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label class="required" for="street">{{ trans('cruds.address.fields.street') }}</label>
                    <input class="form-control {{ $errors->has('street') ? 'is-invalid' : '' }}" type="text" name="street" id="@extends('layouts.admin')
                    @section('content')

                        <div class="card">
                    <div class="card-header">
                        {{ trans('global.edit') }} {{ trans('cruds.faqCategory.title_singular') }}
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route("admin.faq-categories.update", [$faqCategory->id]) }}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label class="required" for="category">{{ trans('cruds.faqCategory.fields.category') }}</label>
                                <input class="form-control {{ $errors->has('category') ? 'is-invalid' : '' }}" type="text" name="category" id="category" value="{{ old('category', $faqCategory->category) }}" required>
                                @if($errors->has('category'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('category') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.faqCategory.fields.category_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger" type="submit">
                                    {{ trans('global.save') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>



                @endsectionstreet" value="{{ old('street', $address->street) }}" required>
                    @if($errors->has('street'))
                        <div class="invalid-feedback">
                            {{ $errors->first('street') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.address.fields.street_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="city">{{ trans('cruds.address.fields.city') }}</label>
                    <input class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" type="text" name="city" id="city" value="{{ old('city', $address->city) }}" required>
                    @if($errors->has('city'))
                        <div class="invalid-feedback">
                            {{ $errors->first('city') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.address.fields.city_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required">{{ trans('cruds.address.fields.state') }}</label>
                    <select class="form-control {{ $errors->has('state') ? 'is-invalid' : '' }}" name="state" id="state" required>
                        <option value disabled {{ old('state', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                        @foreach(App\Models\Address::STATE_SELECT as $key => $label)
                            <option value="{{ $key }}" {{ old('state', $address->state) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
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
                    <input class="form-control {{ $errors->has('zip_code') ? 'is-invalid' : '' }}" type="text" name="zip_code" id="zip_code" value="{{ old('zip_code', $address->zip_code) }}" required>
                    @if($errors->has('zip_code'))
                        <div class="invalid-feedback">
                            {{ $errors->first('zip_code') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.address.fields.zip_code_helper') }}</span>
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
