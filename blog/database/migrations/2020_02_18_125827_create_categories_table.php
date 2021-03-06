<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('code');
            $table->text('description')->nullable();
            $table->string('name_en')->nullable();
            $table->text('description_en')->nullable();
            $table->text('image')->nullable();
            $table->timestamps();
        });

        (new CategorySeeder())->run();
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
