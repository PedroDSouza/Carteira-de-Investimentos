<?php

namespace App\Http\Controllers;

use App\Models\CarteiraUsuario;
use Illuminate\Http\Request;

class MinhasCarteirasController extends Controller
{
    public function index()
    {
        $carteiras = CarteiraUsuario::all();

        return view('minhascarteiras', compact('carteiras'));
    }
}
