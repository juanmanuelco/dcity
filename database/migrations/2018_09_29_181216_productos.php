<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Productos extends Migration
{
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->string('id', '25')->primary();
            $table->string('id_negocio', '25');
            $table->foreign('id_negocio')->references('id')->on('users');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('foto');
            $table->double('precio', 8, 2);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
