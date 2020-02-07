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
            $table->string('name',100);
            $table->text('description');
            $table->string('phone_number',20);
            $table->string('address',100);
            $table->string('data_open',100);
            $table->string('work_time',100);
            $table->string('seats',100);
            $table->string('video',100);
            $table->double('rating');
            $table->unsignedBigInteger('kit_id');
            $table->unsignedBigInteger('hall_id');
            $table->timestamps();
            $table->foreign('kit_id')->references('id')->on('kitchens')->onDelete('cascade');
            $table->foreign('hall_id')->references('id')->on('hall_descriptions')->onDelete('cascade');
        });
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
