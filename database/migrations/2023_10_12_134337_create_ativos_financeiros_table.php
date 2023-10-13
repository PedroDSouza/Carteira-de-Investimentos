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
        Schema::create('ativos_financeiros', function (Blueprint $table) {
            $table->id();
            $table->string('nomeAtivo',100);
            $table->string('tipoAtivo',50);
            $table->text('descricaoAtivo');
            $table->decimal('valorAtivo', $precision = 15, $scale = 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ativos_financeiros');
    }
};
