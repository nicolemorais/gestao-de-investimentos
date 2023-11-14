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
        Schema::create('ativos', function (Blueprint $table) {
            $table->id();
            $table->string('nomeAtivo');
            $table->string('codigo')->unique();
            $table->text('descricaoAtivo')->nullable();
            $table->decimal('valorAtivo', 10, 2);

            
            // Cria o relacionamento com a tabela carteiras
            $table->unsignedBigInteger('id_carteira');
            $table->foreign('id_carteira')->references('id')->on('carteiras')->onDelete('cascade')->onUpdate('cascade');


            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ativos');
    }
};