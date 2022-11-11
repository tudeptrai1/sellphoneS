<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->unsignedBigInteger('pg_id');
            $table->unsignedBigInteger('color_id');
            $table->unsignedBigInteger('memory_id');
            $table->unsignedBigInteger('imp_price')->nullable();
            $table->unsignedBigInteger('sell_price');
            $table->integer('amount');
            $table->boolean('status')->default(1)->comment('1=on,0=off');
            $table->timestamps();
            $table->unsignedBigInteger('discount_id')->nullable();
            $table->foreign('pg_id')->references('id')->on('product_groups')->onDelete('cascade');
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
            $table->foreign('memory_id')->references('id')->on('memories')->onDelete('cascade');
            $table->foreign('discount_id')->references('id')->on('discounts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
