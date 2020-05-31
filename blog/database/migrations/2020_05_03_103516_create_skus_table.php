<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkusTable extends Migration
{
    public function up()
    {
        Schema::create('skus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedSmallInteger('product_id');
            $table->unsignedSmallInteger('count')->default(0);
            $table->double('price')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });

        (new SkusSeeder())->run();
    }

    public function down()
    {
        Schema::dropIfExists('skus');
    }
}
