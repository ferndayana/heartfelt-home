<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatepaymentsTable extends Migration
{
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->integer('Payment_ID')->primary();       // Unique identifier for each payment transaction
            $table->decimal('Amount', 10, 2);                // Monetary value of the payment
            $table->date('PaymentDate');                     // Date of the payment transaction
            $table->string('PaymentStatus', 20);             // Status of the payment (e.g., completed, pending)
            $table->timestamps();                            // Created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('payment');
    }
}
