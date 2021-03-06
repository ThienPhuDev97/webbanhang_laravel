<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_detail', function (Blueprint $table) {
            $table->id('id_order_detail');
            $table->unsignedBigInteger('id_product');
            $table->unsignedBigInteger('id_order');
            $table->integer('amount');
            $table->double('price');
            $table->double('total_money');
            $table->timestamps();

            $table->foreign('id_product')->references('id_product')->on('product');
            $table->foreign('id_order')->references('id_order')->on('order');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_detail');
    }
}
