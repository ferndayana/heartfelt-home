<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateshelterTable extends Migration
{
    public function up()
    {
        Schema::create('shelter', function (Blueprint $table) {
            $table->integer('Shelter_ID')->primary();
            $table->string('ShelterName', 255);
            $table->string('ShelterAddress', 255);
            $table->bigInteger('ShelterNumber'); // Changed to BigInteger to accommodate 15-digit numbers
            $table->string('WebsiteURL', 2083);
            $table->timestamp('Created_at')->useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('shelter');
    }
}
