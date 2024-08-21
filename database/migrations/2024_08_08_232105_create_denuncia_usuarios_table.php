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
        Schema::create('denuncia_usuarios', function (Blueprint $table) {
            $table->foreignId('id_denuncia')->constrained('denuncias')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('denunciado')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->Text('endereco_img_denun');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('denuncia_usuarios');
    }
};
