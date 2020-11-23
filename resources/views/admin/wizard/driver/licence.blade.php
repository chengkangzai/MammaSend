@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            First we need make sure you have an valid driving licence
        </div>

        <div class="card-body">
            <form method="POST" action="{{route('admin.wizard.driver.licence')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="required">{{ trans('cruds.licence.fields.class') }}</label>
                    <select class="form-control {{ $errors->has('class') ? 'is-invalid' : '' }}" name="class" id="class"
                            required>
                        <option value disabled {{ old('class', null) === null ? 'selected' : '' }}>
                            {{ trans('global.pleaseSelect') }}
                        </option>
                        @foreach(App\Models\Licence::CLASS_SELECT as $key => $label)
                            <option value="{{ $key }}" {{ old('class', '') === (string) $key ? 'selected' : '' }}>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                    @if($errors->has('class'))
                        <div class="invalid-feedback">
                            {{ $errors->first('class') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="required" for="street">{{ trans('cruds.licence.fields.IC_number') }}</label>
                    <input class="form-control {{ $errors->has('IC_number') ? 'is-invalid' : '' }}" type="text"
                           name="IC_number" id="IC_number" value="{{ old('IC_number', '') }}" required>
                    @if($errors->has('IC_number'))
                        <div class="invalid-feedback">
                            {{ $errors->first('IC_number') }}
                        </div>
                    @endif
                </div>


                <div class="form-group">
                    <label class="required" for="start_date">{{ trans('cruds.licence.fields.start_date') }}</label>
                    <input class="form-control {{ $errors->has('start_date') ? 'is-invalid' : '' }}" type="text"
                           name="start_date" id="start_date" value="{{ old('start_date', '') }}" required>
                    @if($errors->has('start_date'))
                        <div class="invalid-feedback">
                            {{ $errors->first('start_date') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label class="required" for="end_date">{{ trans('cruds.licence.fields.end_date') }}</label>
                    <input class="form-control {{ $errors->has('end_date') ? 'is-invalid' : '' }}" type="text"
                           name="end_date" id="end_date" value="{{ old('end_date', '') }}" required>
                    @if($errors->has('end_date'))
                        <div class="invalid-feedback">
                            {{ $errors->first('end_date') }}
                        </div>
                    @endif
                </div>
                <input type="text" value="{{auth()->id()}}" name="rider_id" hidden>
                <div class="form-group">
                    <button class="btn btn-info" type="submit">
                        {{ trans('global.next') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        $("#start_date").datepicker({});
        $("#end_date").datepicker({});
    </script>
@endsection
