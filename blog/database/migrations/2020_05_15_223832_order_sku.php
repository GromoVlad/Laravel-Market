<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderSku extends Migration
{
    public function up()
    {
        Schema::create('order_sku', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('order_id');
            $table->integer('sku_id');
            $table->integer('count');
            $table->double('price');
            $table->timestamps();
        });
        (new OrderSkuSeeder())->run();
    }

    public function down()
    {
        Schema::dropIfExists('order_sku');
    }
}
