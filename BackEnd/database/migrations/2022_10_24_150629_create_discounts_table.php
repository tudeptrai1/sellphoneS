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
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->boolean('type');
            $table->unsignedBigInteger('discount_value');
            $table->string('discount_code');
            $table->boolean('active');
            $table->timestamp('created_at');
            $table->timestamp('valid_until');
            $table->string('description');
            $table->integer('max_discount_amount');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discounts');
    }
};
