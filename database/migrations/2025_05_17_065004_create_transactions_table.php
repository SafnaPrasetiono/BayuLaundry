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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('transaction_id');            
            $table->string('username');
            $table->decimal('amount', 15, 2);
            $table->string('currency', 3)->default('IDR');
            $table->string('payment_method'); 
            $table->enum('status', ['pending', 'completed', 'failed', 'refunded'])->default('pending');
            $table->text('description')->nullable();
            $table->timestamp('transaction_date')->useCurrent(); 
            $table->bigInteger('order_id');
            $table->bigInteger('user_id')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
