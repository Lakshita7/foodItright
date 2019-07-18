<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNGOSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ngo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NGOName');
            $table->string('email');
            $table->string('NGOAddress');
            $table->string('NGOCity');
            $table->string('NGOspoc');
            $table->string('NGOumber');
            $table->string('psw');
          
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ngo');
    }
}
