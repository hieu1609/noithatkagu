<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->increments('transaction_id')->unique();
            $table->integer('order_id')->unsigned()->index();
            $table->decimal('total_price', 15, 2);
            $table->string('payment_infor', 100);
            $table->string('user_request', 100);
            $table->string('security', 100);
            $table->timestamps();
            $table->foreign('order_id')->references('order_id')->on('order_user_infor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
    }
}
