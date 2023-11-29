<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('carteiras', function (Blueprint $table) {
            $table->id();
            $table->string('nome_carteira');
            $table->enum('tipo_carteira', ['renda_variavel', 'renda_fixa'])->default('renda_variavel');

            // Cria o relacionamento entre as tabela users
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carteiras');
    }
};
