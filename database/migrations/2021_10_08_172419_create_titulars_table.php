<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitularsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titulars', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('genero', 15);
            $table->date('dtnascimento');
            $table->string('cpf', 11);
            $table->string('rg', 15)->nullable();
            $table->string('emissor', 20)->nullable();
            $table->date('dtemissao', 20)->nullable();
            $table->string('cartaosus')->nullable();
            $table->string('email')->nullable();
            $table->string('telefone1', 20)->nullable();
            $table->string('telefone2', 20)->nullable();
            $table->string('logradouro', 100);
            $table->string('numero', 20);
            $table->string('complemento', 20)->nullable();
            $table->string('bairro', 40);
            $table->string('cidade', 40);
            $table->string('uf');
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
        Schema::dropIfExists('titulars');
    }
}
