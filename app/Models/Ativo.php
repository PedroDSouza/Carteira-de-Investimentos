<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ativo extends Model
{
    use HasFactory;
    protected $table = "ativos_financeiros";
    protected $fillable = ['nomeAtivo','tipoAtivo', 'descricaoAtivo', 'valorAtivo'];
}
