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
        Schema::create('order_transaction', function (Blueprint $table) {
            $table->increments('transaction_id')->unique();
            $table->integer('order_id')->unsigned()->index();
            $table->decimal('total_price', 15, 2);
            $table->string('currency', 20);
            $table->string('paypal_id', 100);
            $table->string('payer_id', 100);
            $table->string('invoice_number', 100);
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
