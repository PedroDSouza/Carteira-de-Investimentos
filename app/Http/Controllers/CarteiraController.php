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
            // Outros campos, se houver
        ]);

        return redirect()->route('carteiras');
    }
}
