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
        Schema::create('orders_products', function (Blueprint $table) {
            $table->id('order_product_id');
            $table->string('product_title');
            $table->string('product_description');
            $table->string('product_price');
            $table->string('product_discount');
            $table->string('product_weight');
            $table->string('product_image');
            $table->string('product_total');
            $table->bigInteger('order_id');
            $table->bigInteger('product_id');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders_products');
    }
};
