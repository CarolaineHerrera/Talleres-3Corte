<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEditorialesTable extends Migration
{
    
    public function up()
    {
        Schema::create('editoriales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('telefono',20);
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('editoriales');
    }
}
