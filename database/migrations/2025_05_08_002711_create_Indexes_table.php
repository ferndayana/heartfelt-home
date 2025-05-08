<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexesTable extends Migration
{
    public function up()
    {
       
        Schema::table('user', function (Blueprint $table) {
            $table->string('Email')->unique()->change();
        });

       
        Schema::table('pet', function (Blueprint $table) {
            $table->index('PetName');
        });

       
        Schema::table('application', function (Blueprint $table) {
            $table->index('AdoptionStatus');
        });

        
        Schema::table('shelter', function (Blueprint $table) {
            $table->index('ShelterName');
        });

       
        Schema::table('donations', function (Blueprint $table) {
            $table->index('user_id');
        });

        
        Schema::table('application', function (Blueprint $table) {
            $table->index('AdoptionDate');
        });
    }

    public function down()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->dropUnique(['Email']);
        });

        Schema::table('pet', function (Blueprint $table) {
            $table->dropIndex(['PetName']);
        });

        Schema::table('application', function (Blueprint $table) {
            $table->dropIndex(['AdoptionStatus']);
            $table->dropIndex(['AdoptionDate']);
        });

        Schema::table('shelter', function (Blueprint $table) {
            $table->dropIndex(['ShelterName']);
        });

        Schema::table('donations', function (Blueprint $table) {
            $table->dropIndex(['user_id']);
        });
    }
}
