<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome_cliente',50)->nullable(false)->comment('Nome do cliente.');
            $table->string('galc',50)->nullable(false)->comment('GALC');
            $table->integer('porta')->nullable()->comment('porta');
            $table->string('endereco_instalacao',100)->nullable(false)->comment('endereço de instalação');
            $table->integer('velocidade')->nullable(false)->comment('velocidade');
            $table->enum('ativo',['S','N'])->nullable(false)->default('S')->comment('Seta se cliente esta ativo.');
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
        Schema::dropIfExists('clientes');
    }
}
