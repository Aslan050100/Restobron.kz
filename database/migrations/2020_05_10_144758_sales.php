<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class sales extends Migration{
    public function up()
    {
        Schema::create('sales',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('price',100);
            $table->timestamps();
        });
        //
    }

    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
