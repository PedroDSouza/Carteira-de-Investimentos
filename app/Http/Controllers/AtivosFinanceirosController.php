<?php

namespace App\Http\Controllers;

use App\Models\AtivosFinanceiros;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AtivosFinanceirosController extends Controller
{
    public function index()
    {
        // Consulte o banco de dados para obter os dados dos ativos financeiros
        $ativos = DB::table('ativos_financeiros')->get();
      //  dd($ativos);
       return view('dashboard', ["ativos" => $ativos]);

        //dd(User::where('email', 'teste@gmail.com')->toSql());
        //dd(AtivosFinanceiros::get());
    }
}
