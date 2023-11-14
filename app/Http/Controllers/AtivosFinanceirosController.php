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

            // Inicialize variáveis para o total e o array de dados do gráfico
            $total = 0;
            $data = [];

            // Calcule o valor total e crie o array de dados do gráfico
            foreach ($ativos as $ativo) {
                $total += $ativo->valorAtivo;
            }

            foreach ($ativos as $ativo) {
                $percentagem = ($ativo->valorAtivo / $total) * 100;
                $data[] = [
                    'name' => $ativo->nomeAtivo,
                    'percentage' => $percentagem,
                ];
            }

            return view('dashboard', ['data' => $data]);


        // Consulte o banco de dados para obter os dados dos ativos financeiros
      //  $ativos = DB::table('ativos_financeiros')->get();
      //  dd($ativos);
      // return view('dashboard', ["ativos" => $ativos]);

        //dd(User::where('email', 'teste@gmail.com')->toSql());
        //dd(AtivosFinanceiros::get());
    }
}
