<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesquisaAtivosController extends Controller
{
    public function index()
    {
        $mensagem = '';

        return view('pesquisarativos', compact('mensagem'));
    }

    public function store(Request $request)
    {
        $acoes = [];

        if ($request->has('codigo')) {
            $acao = '';
            $stockPrice = 0.0;

            $novoCodigo = strtoupper($request->codigo);
            $novoCodigo = filter_var($novoCodigo, FILTER_SANITIZE_STRING);

            if (!in_array($novoCodigo, $acoes)) {
                $acoes[] = $novoCodigo;
            } else {
                $alerta = 'Ação já existente';
            }
        }

        foreach ($acoes as $acao) {
            $url = 'https://www.google.com/finance/quote/' . strtoupper($acao) . ':' . $request->bolsa;

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resposta = curl_exec($ch);

            if ($resposta === false) {
                die('Erro ao buscar os valores das ações.');
            }

            curl_close($ch);

            $pattern = '/<div class="YMlKec fxKbKc">(.*?)<\/div>/s';
            if (preg_match($pattern, $resposta, $matches)) {
                $stockPrice = $matches[1];
                $stockPrice = str_replace('R$', '', $stockPrice);

                DB::table('ativos_financeiros')->insert([
                    'nomeAtivo' => $acao,
                    'valorAtivo' => $stockPrice,
                ]);

                $mensagem = 'Ativo Cadastrado!';
            } else {
                $mensagem = 'Preço das Ações Não encontrado!';
            }
        }

        return view('pesquisarativos', compact('mensagem'));
    }
}
