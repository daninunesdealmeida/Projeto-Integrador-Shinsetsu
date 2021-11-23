<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id_produtos');
            $table->String('nome');
            $table->String('especificacao');
            $table->decimal('preco',12,2);
            $table->integer('qt_estoque');
            $table->integer('estoque_minimo');
            $table->unsignedBigInteger('fk_categoria');
            $table->String('imagem');

            $table->foreign('fk_categoria')->references('id_categorias')->on('categorias');

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
        Schema::dropIfExists('produtos');
    }
}