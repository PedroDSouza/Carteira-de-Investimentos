<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarteiraUsuario extends Model
{
    use HasFactory;

    protected $table = 'carteirausuario';

    public $timestamps = false;

    protected $fillable = [
        'NomeCarteira',
        'UsuarioID',
        'AtivoID',
        'QuantidadeAtivo'
    ];
}
