<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiltersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filters', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->integer('product_id');
            $table->float('price')->nullable();
            $table->string('description');
            $table->string('category');
            $table->string('tags');
            $table->string('sub_image1');
            $table->string('sub_image2');
            $table->string('sub_image3');
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
        Schema::dropIfExists('filters');
    }
}
