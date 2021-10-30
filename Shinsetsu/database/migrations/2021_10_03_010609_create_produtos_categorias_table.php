<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos_categorias', function (Blueprint $table) {
            $table->bigIncrements('id_produtos_categorias'); 
            $table->unsignedBigInteger('fk_produtos');
            $table->foreign('fk_produtos')->references('id_produtos')->on('produtos');             
            $table->unsignedBigInteger('fk_categoria');
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
        Schema::dropIfExists('produtos_categorias');
    }
}
