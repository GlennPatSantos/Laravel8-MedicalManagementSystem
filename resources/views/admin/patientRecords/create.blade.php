@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.patientRecord.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.patient-records.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="pi_1">{{ trans('cruds.patientRecord.fields.pi_1') }}</label>
                <input class="form-control {{ $errors->has('pi_1') ? 'is-invalid' : '' }}" type="text" name="pi_1" id="pi_1" value="{{ old('pi_1', '') }}" required>
                @if($errors->has('pi_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pi_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.patientRecord.fields.pi_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.patientRecord.fields.department') }}</label>
                <select class="form-control {{ $errors->has('department') ? 'is-invalid' : '' }}" name="department" id="department" required>
                    <option value disabled {{ old('department', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\PatientRecord::DEPARTMENT_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('department', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('department'))
                    <div class="invalid-feedback">
                        {{ $errors->first('department') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.patientRecord.fields.department_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.patientRecord.fields.state_status') }}</label>
                <select class="form-control {{ $errors->has('state_status') ? 'is-invalid' : '' }}" name="state_status" id="state_status" required>
                    <option value disabled {{ old('state_status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\PatientRecord::STATE_STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('state_status', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('state_status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('state_status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.patientRecord.fields.state_status_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.patientRecord.fields.position') }}</label>
                <select class="form-control {{ $errors->has('position') ? 'is-invalid' : '' }}" name="position" id="position" required>
                    <option value disabled {{ old('position', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\PatientRecord::POSITION_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('position', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('position'))
                    <div class="invalid-feedback">
                        {{ $errors->first('position') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.patientRecord.fields.position_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.patientRecord.fields.unit') }}</label>
                <select class="form-control {{ $errors->has('unit') ? 'is-invalid' : '' }}" name="unit" id="unit" required>
                    <option value disabled {{ old('unit', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\PatientRecord::UNIT_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('unit', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('unit'))
                    <div class="invalid-feedback">
                        {{ $errors->first('unit') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.patientRecord.fields.unit_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="employment_info">{{ trans('cruds.patientRecord.fields.employment_info') }}</label>
                <input class="form-control {{ $errors->has('employment_info') ? 'is-invalid' : '' }}" type="text" name="employment_info" id="employment_info" value="{{ old('employment_info', '') }}" required>
                @if($errors->has('employment_info'))
                    <div class="invalid-feedback">
                        {{ $errors->first('employment_info') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.patientRecord.fields.employment_info_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="diagnosis">{{ trans('cruds.patientRecord.fields.diagnosis') }}</label>
                <textarea class="form-control {{ $errors->has('diagnosis') ? 'is-invalid' : '' }}" name="diagnosis" id="diagnosis" required>{{ old('diagnosis') }}</textarea>
                @if($errors->has('diagnosis'))
                    <div class="invalid-feedback">
                        {{ $errors->first('diagnosis') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.patientRecord.fields.diagnosis_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="blood_pressure">{{ trans('cruds.patientRecord.fields.blood_pressure') }}</label>
                <input class="form-control {{ $errors->has('blood_pressure') ? 'is-invalid' : '' }}" type="text" name="blood_pressure" id="blood_pressure" value="{{ old('blood_pressure', '') }}" required>
                @if($errors->has('blood_pressure'))
                    <div class="invalid-feedback">
                        {{ $errors->first('blood_pressure') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.patientRecord.fields.blood_pressure_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="heart_rate">{{ trans('cruds.patientRecord.fields.heart_rate') }}</label>
                <input class="form-control {{ $errors->has('heart_rate') ? 'is-invalid' : '' }}" type="text" name="heart_rate" id="heart_rate" value="{{ old('heart_rate', '') }}" required>
                @if($errors->has('heart_rate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('heart_rate') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.patientRecord.fields.heart_rate_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="temperature">{{ trans('cruds.patientRecord.fields.temperature') }}</label>
                <input class="form-control {{ $errors->has('temperature') ? 'is-invalid' : '' }}" type="text" name="temperature" id="temperature" value="{{ old('temperature', '') }}" required>
                @if($errors->has('temperature'))
                    <div class="invalid-feedback">
                        {{ $errors->first('temperature') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.patientRecord.fields.temperature_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="med_name">{{ trans('cruds.patientRecord.fields.med_name') }}</label>
                <input class="form-control {{ $errors->has('med_name') ? 'is-invalid' : '' }}" type="text" name="med_name" id="med_name" value="{{ old('med_name', '') }}" required>
                @if($errors->has('med_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('med_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.patientRecord.fields.med_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="action_taken">{{ trans('cruds.patientRecord.fields.action_taken') }}</label>
                <input class="form-control {{ $errors->has('action_taken') ? 'is-invalid' : '' }}" type="text" name="action_taken" id="action_taken" value="{{ old('action_taken', '') }}" required>
                @if($errors->has('action_taken'))
                    <div class="invalid-feedback">
                        {{ $errors->first('action_taken') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.patientRecord.fields.action_taken_helper') }}</span>
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