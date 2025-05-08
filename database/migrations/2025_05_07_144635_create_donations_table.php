<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->integer('Donation_ID')->primary();         // Primary Key
            $table->date('DonationDate');                      // Not Null
            $table->string('PaymentMethod', 50);               // Not Null
            $table->timestamps();                              // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('donations');
    }
}
