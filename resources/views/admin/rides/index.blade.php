@extends('layouts.admin')
@section('content')
    @can('ride_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.rides.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.ride.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.ride.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-Ride">
                    <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.ride.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.ride.fields.rider') }}
                        </th>
                        <th>
                            {{ trans('cruds.ride.fields.price') }}
                        </th>
                        <th>
                            {{ trans('cruds.ride.fields.pickup_address') }}
                        </th>
                        <th>
                            {{ trans('cruds.ride.fields.dropoff_address') }}
                        </th>

                        <th>
                            &nbsp;
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rides as $key => $ride)
                        <tr data-entry-id="{{ $ride->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $ride->id ?? '' }}
                            </td>
                            <td>
                                <a href="{{route('admin.users.show',$ride->rider->id)}}" class="btn btn-xs btn-primary">
                                    {{ $ride->rider->name ?? '' }}
                                </a>
                            </td>
                            <td>
                                {{ $ride->price ?? '' }}
                            </td>
                            <td>
                                @if($ride->pickup_address_id !== null)
                                    <a class="btn btn-xs btn-primary"
                                       href="{{ route('admin.addresses.show', $ride->pickup_address_id) }}">
                                        {{ $ride->pickup_address_id ?? '' }}
                                    </a>
                                @endif
                            </td>
                            <td>
                                @if($ride->dropoff_address_id !== null)
                                    <a class="btn btn-xs btn-primary"
                                       href="{{ route('admin.addresses.show', $ride->dropoff_address_id) }}">
                                        {{ $ride->dropoff_address_id ?? '' }}
                                    </a>
                                @endif
                            </td>
                            <td>
                                @can('ride_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.rides.show', $ride->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('ride_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.rides.edit', $ride->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('ride_delete')
                                    <form action="{{ route('admin.rides.destroy', $ride->id) }}" method="POST"
                                          onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                          style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger"
                                               value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
@section('scripts')
    @parent
    <script>
        $(function () {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
                @can('ride_delete')
            let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
            let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.rides.massDestroy') }}",
                className: 'btn-danger',
                action: function (e, dt, node, config) {
                    var ids = $.map(dt.rows({selected: true}).nodes(), function (entry) {
                        return $(entry).data('entry-id')
                    });

                    if (ids.length === 0) {
                        alert('{{ trans('global.datatables.zero_selected') }}')

                        return
                    }

                    if (confirm('{{ trans('global.areYouSure') }}')) {
                        $.ajax({
                            headers: {'x-csrf-token': _token},
                            method: 'POST',
                            url: config.url,
                            data: {ids: ids, _method: 'DELETE'}
                        })
                            .done(function () {
                                location.reload()
                            })
                    }
                }
            }
            dtButtons.push(deleteButton)
            @endcan

            $.extend(true, $.fn.dataTable.defaults, {
                orderCellsTop: true,
                order: [[1, 'desc']],
                pageLength: 100,
            });
            let table = $('.datatable-Ride:not(.ajaxTable)').DataTable({buttons: dtButtons})
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function (e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

        })

    </script>
@endsection
