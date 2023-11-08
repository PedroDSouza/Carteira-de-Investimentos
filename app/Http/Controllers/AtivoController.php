<?php

namespace App\Http\Controllers;

use App\Models\Ativo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AtivoController extends Controller
{

    public function index(Request $request)
    {
        $request->validate([
            'nomeAtivo' => 'required',
            'tipoAtivo' => 'required',
            'descricaoAtivo' => 'required',
            'valorAtivo' => 'required'
        ]);

        Ativo::create([
            'nomeAtivo' => $request->nomeAtivo,
            'tipoAtivo' => $request->tipoAtivo,
            'descricaoAtivo' => $request->descricaoAtivo,
            'valorAtivo' => $request->valorAtivo
        ]);

        return redirect()->route('ativo')->with('success', 'Ativo cadastrado com sucesso');
    }
}
