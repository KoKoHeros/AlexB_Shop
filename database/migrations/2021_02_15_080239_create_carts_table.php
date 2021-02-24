<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('client_email');
            $table->integer('product_id')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('name')->nullable();
            $table->string('review')->nullable();
            $table->string('review_written_user_client')->nullable();
            $table->float('review_mark')->nullable();
            $table->float('price')->nullable();
            $table->string('description')->nullable();;
            $table->string('category')->nullable();
            $table->string('tags')->nullable();
            $table->string('main_image')->nullable();
            $table->string('sub_image1')->nullable();
            $table->string('sub_image2')->nullable();
            $table->string('sub_image3')->nullable();
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
        Schema::dropIfExists('carts');
    }
}
