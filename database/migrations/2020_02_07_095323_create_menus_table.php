<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->integer('price');
            $table->text('description',100);
            $table->unsignedBigInteger('pro_id');
            $table->unsignedBigInteger('dish_type_id');
            $table->timestamps();
            $table->foreign('pro_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('dish_type_id')->references('id')->on('dish_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
