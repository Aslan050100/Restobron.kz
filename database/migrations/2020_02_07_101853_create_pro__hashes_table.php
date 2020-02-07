<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProHashesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro__hashes', function (Blueprint $table) {
            $table->unsignedBigInteger('pro_id');
            $table->unsignedBigInteger('hashtag_id');
            $table->timestamps();
            $table->foreign('pro_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('hashtag_id')->references('id')->on('hashtags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pro__hashes');
    }
}
