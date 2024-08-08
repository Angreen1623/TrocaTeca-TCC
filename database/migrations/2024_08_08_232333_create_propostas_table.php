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
        Schema::create('propostas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_artigo')->constrained('artigos')->onDelete('cascade')->onUpdate('cascade');
            $table->String('nome_proposta');
            $table->String('categoria_proposta');
            $table->String('condicao_proposta');
            $table->String('tempo_uso_proposta');
            $table->String('endereco_img_prop');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propostas');
    }
};
