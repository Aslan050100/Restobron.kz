<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProKitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro__kits', function (Blueprint $table) {
            $table->unsignedBigInteger('pro_id');
            $table->unsignedBigInteger('kitchen_id');
            $table->timestamps();
            $table->foreign('pro_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('kitchen_id')->references('id')->on('kitchens')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pro__kits');
    }
}
