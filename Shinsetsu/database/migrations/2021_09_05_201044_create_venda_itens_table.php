<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendaItensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venda_itens', function (Blueprint $table) {
            $table->bigIncrements('id_vendaItens');
            $table->Integer('quantidade')->nullable();
            $table->String('vlr_unitário')->nullable();
            $table->unsignedBigInteger('fk_produtos')->nullable(); 
            $table->unsignedBigInteger('fk_vendas')->nullable();        
            $table->timestamps();

            $table->foreign('fk_produtos')->references('id_produtos')->on('produtos');
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
        Schema::dropIfExists('venda_itens');
    }
}
