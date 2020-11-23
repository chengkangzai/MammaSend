@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            What is your Child Information?
        </div>

        <div class="card-body">
            <form method="POST" action="/wizard/customer/child" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="required" for="full_name">{{ trans('cruds.children.fields.full_name') }}</label>
                    <input class="form-control {{ $errors->has('full_name') ? 'is-invalid' : '' }}" type="text"
                           name="full_name" id="full_name" value="{{ old('full_name', '') }}" required>
                    @if($errors->has('full_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('full_name') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="required" for="IC_number">{{ trans('cruds.children.fields.IC_number') }}</label>
                    <input class="form-control {{ $errors->has('IC_number') ? 'is-invalid' : '' }}" type="text"
                           name="IC_number" id="IC_number" value="{{ old('IC_number', '') }}" required>
                    @if($errors->has('IC_number'))
                        <div class="invalid-feedback">
                            {{ $errors->first('IC_number') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="required" for="school_name">{{ trans('cruds.children.fields.school_name') }}</label>
                    <input class="form-control {{ $errors->has('school_name') ? 'is-invalid' : '' }}" type="text"
                           name="school_name" id="school_name" value="{{ old('school_name', '') }}" required>
                    @if($errors->has('school_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('school_name') }}
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
