<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewTable extends Migration
{
    public function up()
    {
        Schema::create('review', function (Blueprint $table) {
            $table->integer('Review_ID')->primary(); // Primary Key
            $table->string('Comment', 500);          // Not Null
            $table->integer('Rating', false, true);  // Not Null (unsigned integer)
            $table->date('Date_Posted');             // Not Null
            $table->timestamps();                    // created_at & updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('review');
    }
}
