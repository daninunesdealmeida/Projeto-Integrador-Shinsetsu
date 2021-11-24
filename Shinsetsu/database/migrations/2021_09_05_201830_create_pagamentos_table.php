<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagamentos', function (Blueprint $table) {
            $table->bigIncrements('id_pagamentos');
            $table->String('cartao');
            $table->String('nome_cartao');
            $table->String('num_cartao');
            $table->Date('dt_vencimento');
            $table->unsignedBigInteger('fk_vendas');
            $table->unsignedBigInteger('fk_usuarios');
            $table->timestamps();
            
            $table->foreign('fk_usuarios')->references('id')->on('users');
            $table->foreign('fk_vendas')->references('id_vendas')->on('vendas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagamentos');
    }
}
