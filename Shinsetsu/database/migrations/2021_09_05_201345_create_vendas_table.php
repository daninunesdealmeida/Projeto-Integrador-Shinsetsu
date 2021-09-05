<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->bigIncrements('id_vendas');
            $table->Date('dt_venda');
            $table->String('documento');
            $table->Integer('total_itens');
            $table->Float('valor_vendas');
            $table->unsignedBigInteger('fk_produtos');
            $table->timestamps();

            $table->foreign('fk_produtos')->references('id_produtos')->on('produtos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendas');
    }
}
