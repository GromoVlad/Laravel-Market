<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyOptionsTable extends Migration
{
    public function up()
    {
        Schema::create('property_options', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedSmallInteger('property_id');
            $table->string('name');
            $table->string('name_en');
            $table->timestamps();
            $table->softDeletes();
        });

        (new PropertyOptionsSeeder())->run();
    }

    public function down()
    {
        Schema::dropIfExists('property_options');
    }
}
