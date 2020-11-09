@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.show') }} {{ trans('cruds.children.title') }}
        </div>

        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.children.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
                <table class="table table-bordered table-striped">
                    <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.children.fields.id') }}
                        </th>
                        <td>
                            {{ $child->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.children.fields.full_name') }}
                        </th>
                        <td>
                            {{ $child->full_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.children.fields.IC_number') }}
                        </th>
                        <td>
                            {{ $child->IC_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.children.fields.school_name') }}
                        </th>
                        <td>
                            {{ $child->school_name }}
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
                    <a class="btn btn-default" href="{{ route('admin.children.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
            </div>
        </div>
    </div>



@endsection
