<?php

namespace App\Http\Requests;

use App\Models\PatientRecord;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPatientRecordRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('patient_record_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:patient_records,id',
        ];
    }
}