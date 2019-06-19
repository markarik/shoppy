<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void $table->integer('image_id');
     */
    public function up()
    {
        Schema::create('featureds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('product_id');
//            $table->integer('image_id');
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
        Schema::dropIfExists('featureds');
    }
}
