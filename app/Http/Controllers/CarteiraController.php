<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarteiraUsuario;

class CarteiraController extends Controller
{
    public function create()
    {
        return view('carteiras');
    }

    public function store(Request $request)
    {
        $request->validate([
            'NomeCarteira' => 'required|string|max:255',
        ]);

        CarteiraUsuario::create([
            'NomeCarteira' => $request->NomeCarteira,
        ]);

        return redirect()->route('carteiras.create')->with('success', 'Carteira criada com sucesso!');
    }
}
