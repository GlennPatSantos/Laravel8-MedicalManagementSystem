@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.patientRecord.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.patient-records.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.patientRecord.fields.id') }}
                        </th>
                        <td>
                            {{ $patientRecord->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patientRecord.fields.pi_1') }}
                        </th>
                        <td>
                            {{ $patientRecord->pi_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patientRecord.fields.department') }}
                        </th>
                        <td>
                            {{ App\Models\PatientRecord::DEPARTMENT_SELECT[$patientRecord->department] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patientRecord.fields.state_status') }}
                        </th>
                        <td>
                            {{ App\Models\PatientRecord::STATE_STATUS_SELECT[$patientRecord->state_status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patientRecord.fields.position') }}
                        </th>
                        <td>
                            {{ App\Models\PatientRecord::POSITION_SELECT[$patientRecord->position] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patientRecord.fields.unit') }}
                        </th>
                        <td>
                            {{ App\Models\PatientRecord::UNIT_SELECT[$patientRecord->unit] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patientRecord.fields.employment_info') }}
                        </th>
                        <td>
                            {{ $patientRecord->employment_info }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patientRecord.fields.diagnosis') }}
                        </th>
                        <td>
                            {{ $patientRecord->diagnosis }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patientRecord.fields.blood_pressure') }}
                        </th>
                        <td>
                            {{ $patientRecord->blood_pressure }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patientRecord.fields.heart_rate') }}
                        </th>
                        <td>
                            {{ $patientRecord->heart_rate }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patientRecord.fields.temperature') }}
                        </th>
                        <td>
                            {{ $patientRecord->temperature }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patientRecord.fields.med_name') }}
                        </th>
                        <td>
                            {{ $patientRecord->med_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.patientRecord.fields.action_taken') }}
                        </th>
                        <td>
                            {{ $patientRecord->action_taken }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.patient-records.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection