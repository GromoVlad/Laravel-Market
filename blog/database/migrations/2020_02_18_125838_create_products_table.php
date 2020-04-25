<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->integer('category_id');
            $table->string('code');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('name_en')->nullable();
            $table->text('description_en')->nullable();
            $table->text('image')->nullable();
            $table->double('price')->default(0);
            $table->unsignedInteger('count')->default(0);
            $table->tinyInteger('new')->default(0);
            $table->tinyInteger('hit')->default(0);
            $table->tinyInteger('recommend')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });

        (new ProductSeeder())->run();
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
