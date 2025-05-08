<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreaterecordsTable extends Migration
{
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->integer('Record_ID')->primary(); // Unique ID
            $table->string('VaccinationStatus', 50); // Not Null
            $table->string('MedicalConditions', 255); // Not Null
            $table->timestamp('created_at')->useCurrent(); // Auto timestamp
        });
    }

    public function down()
    {
        Schema::dropIfExists('records');
    }
}
