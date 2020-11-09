@extends('layouts.admin')
@section('content')
    @can('user_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.children.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.children.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.children.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                    <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.children.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.children.fields.full_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.children.fields.IC_number') }}
                        </th>
                        <th>
                            {{ trans('cruds.children.fields.pickup_address') }}
                        </th>
                        <th>
                            {{ trans('cruds.children.fields.dropoff_address') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($children as $key => $child)
                        <tr data-entry-id="{{ $child->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $child->id ?? '' }}
                            </td>
                            <td>
                                {{ $child->full_name ?? '' }}
                            </td>
                            <td>
                                {{ $child->IC_number ?? '' }}
                            </td>
                            <td>
                                @if($child->pickup_address_id !== null)
                                    <a class="btn btn-xs btn-primary"
                                       href="{{ route('admin.addresses.show', $child->pickup_address_id) }}">
                                        {{ $child->pickup_address_id ?? '' }}
                                    </a>
                                @endif

                            </td>
                            <td>
                                @if($child->dropoff_address_id !== null)
                                    <a class="btn btn-xs btn-primary"
                                       href="{{ route('admin.addresses.show', $child->dropoff_address_id) }}">
                                        {{ $child->dropoff_address_id ?? '' }}
                                    </a>
                                @endif
                            </td>
                            <td>
                                @can('child_show')
                                    <a class="btn btn-xs btn-primary"
                                       href="{{ route('admin.children.show', $child->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('child_edit')
                                    <a class="btn btn-xs btn-info"
                                       href="{{ route('admin.children.edit', $child->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('child_delete')
                                    <form action="{{ route('admin.children.destroy', $child->id) }}" method="POST"
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
                @can('user_delete')
            let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
            let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.children.massDestroy') }}",
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
            let table = $('.datatable-User:not(.ajaxTable)').DataTable({buttons: dtButtons})
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function (e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

        })

    </script>
@endsection
