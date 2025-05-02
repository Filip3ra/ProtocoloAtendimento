<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Esse arquivo representa a migração para criar a tabela 'protocolos'.
 * Uma migração é uma forma de versionar o banco de dados, permitindo que você
 * crie, altere ou delete tabelas e colunas de forma controlada.
 * Aqui nós vamos criar a tabela 'protocolos' com os campos necessários.
 */

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('protocolos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf');
            $table->string('assunto');
            $table->text('descricao');
            $table->string('numero_protocolo')->unique();
            $table->string('status')->default('Recebido');
            $table->timestamps(); // Cria os campos created_at e updated_at automaticamente
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('protocolos');
    }
};
