<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientRecord extends Model
{
    use HasFactory;

    public const POSITION_SELECT = [
        'position' => 'ACCOUNT EXECUTIVE',
    ];

    public const DEPARTMENT_SELECT = [
        'department' => 'Computer Science',
    ];

    public const UNIT_SELECT = [
        'unit' => 'College of Arts and Sciences',
    ];

    public const STATE_STATUS_SELECT = [
        'state_status'         => 'Active',
        'state_status2' => 'On study leave',
    ];

    public $table = 'patient_records';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'pi_1',
        'department',
        'state_status',
        'position',
        'unit',
        'employment_info',
        'diagnosis',
        'blood_pressure',
        'heart_rate',
        'temperature',
        'med_name',
        'action_taken',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}