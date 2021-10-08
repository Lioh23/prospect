<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDependentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependentes', function (Blueprint $table) {
            $table->id();
            $table->string('parentesco');
            $table->string('nome', 100);
            $table->string('genero', 15);
            $table->date('dtnascimento');
            $table->string('cpf', 11);
            $table->string('rg', 15)->nullable();
            $table->string('emissor', 20)->nullable();
            $table->date('dtemissao', 20)->nullable();
            $table->string('cartao_sus')->nullable();
            $table->foreignId('titular_id')
                ->constrained()
                ->onDelete('cascade');
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
        Schema::dropIfExists('dependentes');
    }
}
