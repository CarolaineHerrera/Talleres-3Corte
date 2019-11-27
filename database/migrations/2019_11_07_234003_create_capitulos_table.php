<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapitulosTable extends Migration
{
   
    public function up()
    {
        Schema::create('capitulos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('libro_id')->unsigned();
            $table->text('sipnosis');
            $table->foreign('libro_id')
            ->references('id')
            ->on('libros')
            ->onDelete('cascade')
            ->onUpdate('cascade');    
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
