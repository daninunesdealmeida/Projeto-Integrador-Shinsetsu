<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->bigIncrements('id_pessoas');
            $table->String("nome");
            $table->String("telefone");
            $table->String("Rua");
            $table->String("Bairro");
            $table->String("Cidade");
            $table->Integer("CEP");
            $table->String("Complemento");
            $table->Integer("CPF");
            $table->Integer("RG");
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
        Schema::dropIfExists('pessoas');
    }
}
