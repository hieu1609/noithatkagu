<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('transaction_id')->unsigned()->index();
            $table->integer('product_id')->unsigned()->index();
            $table->string('product_name', 255);
            $table->decimal('product_price', 15, 2);
            $table->integer('quantity');
            $table->integer('status')->default(0); // 0|1|2|3 <=> none|confirmed|shipping|finished
            $table->timestamps();
            $table->foreign('transaction_id')->references('id')->on('transaction');
            $table->foreign('product_id')->references('product_id')->on('product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
