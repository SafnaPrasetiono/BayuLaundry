<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id');
            $table->string('username');
            $table->integer('amount');
            $table->date('order_date');
            $table->enum('status', ['payment', 'pending', 'progress', 'waiting', 'completed', 'cancle'])->default('payment');
            $table->string('payment_method');
            $table->bigInteger('user_id')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
