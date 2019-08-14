<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('product_id');
            $table->biginteger('user_id')->unsigned();//represents BUYERS
            $table->biginteger('checkout_id')->unsigned()->nullable();
            $table->integer('quantity');
            $table->integer('amount');
            $table->softDeletes('deleted_at');
            $table->string('delivery_status')->default("1")->comment("1: No delivery, 2: Delivered");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_products');
    }
}
