<?php

namespace App\Http\Controllers;

use App\Models\Ativo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AtivoController extends Controller
{
    public function create(Request $request) {

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


    public function destroy(Request $request) {
        $request->validate([
            'nomeAtivoDeletar' => 'required'
        ]);
    
        $ativo = Ativo::where('nomeAtivo', $request->nomeAtivoDeletar)->first();
    
        if ($ativo) {
            $ativo->delete();
            return redirect()->route('dashboard')->with('success', 'Ativo deletado com sucesso');
        } else {
            return redirect()->route('dashboard')->with('error', 'Ativo não encontrado');
        }
    }
    

    public function update(Request $request) {
        $request->validate([
            'nomeAtivoEditar' => 'required',
            'novoNomeAtivo' => 'required',
            'tipoAtivoEditar' => 'required',
            'descricaoAtivoEditar' => 'required',
            'valorAtivoEditar' => 'required',
        ]);

        $ativo = Ativo::where('nomeAtivo', $request->nomeAtivoEditar)->first();
    
        if ($ativo) {
            $ativo->update([
                'nomeAtivo' => $request->novoNomeAtivo,
                'tipoAtivo' => $request->tipoAtivoEditar,
                'descricaoAtivo' => $request->descricaoAtivoEditar,
                'valorAtivo' => $request->valorAtivoEditar,
            ]);
    
            return redirect()->route('dashboard')->with('success', 'Ativo editado com sucesso');
        } else {
            return redirect()->route('dashboard')->with('error', 'Ativo não encontrado');
        }
    }
    
    

    public function index(Request $request)
    {        
        return view('ativo');
    }
}
