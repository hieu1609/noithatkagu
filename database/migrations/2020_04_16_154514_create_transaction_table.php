<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('user_id')->unsigned()->nullable()->index();
            $table->string('name', 50);
            $table->string('phone', 50);
            $table->string('email', 50);
            $table->string('address', 255);
            $table->decimal('total_price', 15, 2);
            $table->string('payment', 100);
            $table->string('payment_infor', 100);
            $table->string('user_request', 100);
            $table->string('security', 100);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
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
