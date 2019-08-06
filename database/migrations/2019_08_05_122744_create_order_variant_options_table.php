<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderVariantOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_variant_options', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('orderproduct_id')->unsigned();
            $table->foreign('orderproduct_id')->references('id')->on('order_products')->onDelete('cascade');

            $table->integer('variant_option_id')->unsigned()->nullable();
            $table->foreign('variant_option_id')->references('id')->on('variant_options');
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
        Schema::dropIfExists('order_variant_options');
    }
}
