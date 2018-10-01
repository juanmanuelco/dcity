<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pagos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->string('id', '25')->primary();
            $table->string('id_negocio', '25');
            $table->foreign('id_negocio')->references('id')->on('users');
            $table->integer('sucursales');
            $table->timestamps();
            $table->double('pagar', 8, 2);
            $table->string('estado', '1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagos');
    }
}
