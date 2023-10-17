<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
  public function seuMetodo() {
    $data = request()->all();
    // Faça algo com os dados recebidos, como salvar no banco de dados
}
}
