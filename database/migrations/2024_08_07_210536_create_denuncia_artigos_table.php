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
        Schema::create('denuncia_artigos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('denunciador_id')->constrained();
            $table->String('dt_hr_denun');
            $table->String('mensagem_denun');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('denuncia_artigos');
    }
};
