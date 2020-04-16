<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('product_id')->unique();
            $table->string('product_name', 255);
            $table->decimal('product_price', 15, 2);
            $table->string('product_image', 500);
            $table->string('infor', 1500);
            $table->integer('cat_id')->unsigned()->index();
            $table->float('rating', 8, 2)->default(0);
            $table->timestamps();
            $table->foreign('cat_id')->references('cat_id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
