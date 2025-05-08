<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateapplicationTable extends Migration
{
    public function up()
    {
        Schema::create('application', function (Blueprint $table) {
            $table->integer('Application_ID')->primary(); // Unique ID
            $table->string('FullName', 255); // Not Null
            $table->string('Email', 255); // Not Null
            $table->string('Location', 100); // Not Null
            $table->integer('Contact'); // Not Null
            $table->string('UserGender', 10); // Not Null
            $table->date('AdoptionDate'); // Not Null
            $table->string('AdoptionStatus', 50); // Not Null
            $table->timestamps(); // Created_at, updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('application');
    }
}
