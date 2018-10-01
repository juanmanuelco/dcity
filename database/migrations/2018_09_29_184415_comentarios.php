<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comentarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->string('id', '25')->primary();
            $table->string('id_negocio', '25');
            $table->foreign('id_negocio')->references('id')->on('users');
            $table->string('id_usuario', '25');
            $table->foreign('id_usuario')->references('id')->on('clientes');
            $table->timestamp('fecha');
            $table->string('detalle', '250');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentarios');
    }
}
