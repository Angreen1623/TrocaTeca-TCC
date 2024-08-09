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
        Schema::create('mensagems', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_usuario')->constrained('users')->onUpdate('cascade');
            $table->foreignId('id_proposta')->constrained('propostas')->onDelete('cascade')->onUpdate('cascade');
            $table->Text('conteudo_mensagem');
            $table->Text('endereco_anexo');
            $table->Boolean('visto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mensagems');
    }
};
