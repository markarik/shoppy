<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->float('unit_cost');
            $table->bigInteger('brand_id')->unsigned();
            $table->string('short_description');
            $table->text('long_description')->nullable();
            $table->string('featured_image_url');
            $table->string('status')->default("1")->comment("1: normal, 2: featured");
            $table->integer('seller_id')->unsigned();

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
        Schema::dropIfExists('products');
    }
}
