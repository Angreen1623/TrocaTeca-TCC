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
        Schema::create('imagem_artigos', function (Blueprint $table) {
            $table->id();
            $table->String('imagem_principal');
            $table->String('Endereco_imagem');
            $table->foreignId('artigo_id')
                ->constrained()
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imagem_artigos');
    }
};