<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetTable extends Migration
{
    public function up()
    {
        Schema::create('pet', function (Blueprint $table) {
            $table->integer('Pet_ID')->primary(); // Unique Pet ID
            $table->string('PetName', 100);
            $table->string('PetType', 50);        // e.g., Cat or Dog
            $table->string('Breed', 100);
            $table->string('PetGender', 10);
            $table->integer('Age');               // No length in Laravel, just use integer
            $table->string('HealthStatus', 100);
            $table->string('PersonalTraits', 255);
            $table->decimal('AdoptionFee', 10, 2);
        });
    }

    public function down()
    {
        Schema::dropIfExists('pet');
    }
}
