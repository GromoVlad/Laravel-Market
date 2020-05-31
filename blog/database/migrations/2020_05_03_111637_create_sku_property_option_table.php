<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkuPropertyOptionTable extends Migration
{
    public function up()
    {
        Schema::create('sku_property_option', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedSmallInteger('property_option_id');
            $table->unsignedSmallInteger('sku_id');
            $table->timestamps();
        });

        (new SkuPropertyOptionSeeder())->run();
    }

    public function down()
    {
        Schema::dropIfExists('sku_property_option');
    }
}
