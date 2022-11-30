<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatBackEndTable extends Migration
//return new class extends Migration
{
    
    public function up()
    {
        Schema::create('back_ends', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('back_ends');
    }
};
