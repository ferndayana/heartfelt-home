<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAdminTable extends Migration
{
    public function up()
    { 
        Schema::create('admin', function (Blueprint $table) {
            $table->integer('Admin_ID')->primary();
            $table->string('AdminUsername', 50);
            $table->string('Password', 255);
            $table->timestamp('Created_at')->useCurrent();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('admin');
    }
}