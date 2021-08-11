<?php

namespace App\Http\Requests;

use App\Models\PatientRecord;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePatientRecordRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('patient_record_create');
    }

    public function rules()
    {
        return [
            'pi_1' => [
                'string',
                'min:1',
                'max:30',
                'required',
            ],
            'department' => [
                'required',
            ],
            'state_status' => [
                'required',
            ],
            'position' => [
                'required',
            ],
            'unit' => [
                'required',
            ],
            'employment_info' => [
                'string',
                'min:1',
                'max:50',
                'required',
            ],
            'diagnosis' => [
                'required',
            ],
            'blood_pressure' => [
                'string',
                'min:1',
                'max:10',
                'required',
            ],
            'heart_rate' => [
                'string',
                'min:1',
                'max:10',
                'required',
            ],
            'temperature' => [
                'string',
                'min:1',
                'max:5',
                'required',
            ],
            'med_name' => [
                'string',
                'min:1',
                'max:100',
                'required',
            ],
            'action_taken' => [
                'string',
                'min:1',
                'max:100',
                'required',
            ],
        ];
    }
}