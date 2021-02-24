<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('client_email');
            $table->string('client_name');
            $table->string('client_address');
            $table->string('client_country');
            $table->string('client_phone');
            $table->string('client_birthday');
            $table->integer('product_id');
            $table->string('name');
            $table->integer('product_quantity');
            $table->string('review')->nullable();
            $table->string('review_written_user_client')->nullable();
            $table->float('review_mark')->nullable();
            $table->float('price')->nullable();
            $table->string('description');
            $table->string('category');
            $table->string('tags');
            $table->string('main_image');
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
        Schema::dropIfExists('orders');
    }
}
