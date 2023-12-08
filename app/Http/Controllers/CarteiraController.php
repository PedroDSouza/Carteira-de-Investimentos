<?php

namespace App\Http\Controllers;

use App\Models\Carteira; // Certifique-se de ajustar o namespace conforme a estrutura do seu projeto
use App\Models\CarteiraUsuario;
use Illuminate\Http\Request;

class CarteiraController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'NomeCarteira' => 'required|string|max:255',
        ]);

        CarteiraUsuario::create([
            'NomeCarteira' => $request->NomeCarteira,
            'UsuarioID' => auth()->id(),
            'ID' => $request->ID,
            'QuantidadeAtivo' => 1
        ]);

        return redirect()->route('carteiras')->with('success', 'Carteira criada com sucesso!');
    }
}
