<div class="card">
    <div class="card-header">
        {{ trans('cruds.patientList.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-patientrecordPatientLists">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.patientList.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.patientList.fields.patientrecord') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($patientLists as $key => $patientList)
                        <tr data-entry-id="{{ $patientList->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $patientList->id ?? '' }}
                            </td>
                            <td>
                                @foreach($patientList->patientrecords as $key => $item)
                                    <span class="badge badge-info">{{ $item->pi_1 }}</span>
                                @endforeach
                            </td>
                            <td>
                                @can('patient_list_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.patient-lists.show', $patientList->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan



                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  
  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-patientrecordPatientLists:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection