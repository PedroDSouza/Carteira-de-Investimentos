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
        Schema::create('transacoes', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('user_id');
            $table->foreignUuid('ativos_financeiros_id');
            $table->set('tipoTransacao', ['Crédito','Pix','Boleto','Criptomoeda']);
            $table->decimal('quantidade', $precision = 15, $scale = 4); 
            $table->decimal('precoUnidade', $precision = 15, $scale = 4);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transacoes');
    }
};
