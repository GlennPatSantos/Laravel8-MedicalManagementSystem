<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientRecordsTable extends Migration
{
    public function up()
    {
        Schema::create('patient_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pi_1');
            $table->string('department');
            $table->string('state_status');
            $table->string('position');
            $table->string('unit');
            $table->string('employment_info');
            $table->longText('diagnosis');
            $table->string('blood_pressure');
            $table->string('heart_rate');
            $table->string('temperature');
            $table->string('med_name');
            $table->string('action_taken');
            $table->timestamps();
        });
    }
}