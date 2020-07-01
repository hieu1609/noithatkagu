<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderUserInforTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_user_infor', function (Blueprint $table) {
            $table->increments('order_id')->unique();
            $table->integer('user_id')->unsigned()->nullable()->index(); //null nếu không đăng nhập 
            $table->string('name', 50);
            $table->string('phone', 50);
            $table->string('email', 50);
            $table->string('address', 255);
            $table->string('delivery_option', 100);
            $table->string('discount')->nullable();
            $table->integer('first_price');
            $table->integer('total_price');
            $table->string('payment_method'); //cash|paypal
            $table->boolean('paid')->default(0);
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
        Schema::dropIfExists('order_user_infor');
    }
}
