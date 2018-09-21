<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('familia_id');
            $table->integer('sub_familia_id');
            $table->integer('dado');
            $table->string('descripcion');
            $table->float('largo');
            $table->float('BL');
            $table->float('NG');
            $table->float('HU');
            $table->float('B3');
            $table->float('B5');
            $table->float('CH');
            $table->float('BR');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos');
    }
}
