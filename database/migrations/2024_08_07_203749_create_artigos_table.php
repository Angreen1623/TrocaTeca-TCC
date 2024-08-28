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
        Schema::create('artigos', function (Blueprint $table) {
            $table->id();
            $table->String('nome_artigo');
            $table->Float('valor_sugerido_artigo')->nullable();
            $table->String('preferencia_troca_artigo')->nullable();
            $table->String('categoria_artigo');
            $table->String('condicao_artigo');
            $table->String('tempo_uso_artigo');
            $table->boolean('status_artigo');
            $table->foreignId('id_usuario_ofertante')->constrained('users')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artigos');
    }
};
