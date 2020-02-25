<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('monday',100);
            $table->string('tuesday',100);
            $table->string('wednesday',100);
            $table->string('thursday',100);
            $table->string('friday',100);
            $table->string('saturday',100);
            $table->string('sunday',100);
            $table->unsignedBigInteger('pro_id');
            $table->timestamps();
            $table->foreign('pro_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hours');
    }
}
