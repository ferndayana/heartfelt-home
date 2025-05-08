<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->integer('User_ID')->primary(); // Unique User ID (can be foreign key elsewhere)
            $table->string('Email', 255);
            $table->string('Username', 50);
            $table->timestamp('Created_at')->useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user');
    }
}
