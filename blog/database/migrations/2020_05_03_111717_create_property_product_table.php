<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyProductTable extends Migration
{
    public function up()
    {
        Schema::create('property_product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedSmallInteger('product_id');
            $table->unsignedSmallInteger('property_id');
            $table->timestamps();
        });

        (new PropertyProductSeeder())->run();
    }

    public function down()
    {
        Schema::dropIfExists('property_product');
    }
}
