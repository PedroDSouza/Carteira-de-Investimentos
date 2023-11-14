<?php
use Illuminate\Support\Facades\DB; 

$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $acoes = array();

    if (isset($_POST['codigo'])) {
        $acao = "";
        $stockPrice = 0.0;

        $novoCodigo = strtoupper($_POST['codigo']);
        $novoCodigo = filter_var($novoCodigo, FILTER_SANITIZE_STRING);

        if (!in_array($novoCodigo, $acoes)) {
            $acoes[] = $novoCodigo;
        } else {
            $alerta = "Ação já existente";
        }
    }

    foreach ($acoes as $acao) {
        $url = 'https://www.google.com/finance/quote/' . strtoupper($acao) . ':' . $_POST['bolsa'];

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

           $mensagem = "Ativo Cadastrado!";


        } else {
          
            $mensagem = "Preço das Ações Não encontrado!";
           
        }

    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3&display=swap" rel="stylesheet">
    <title>API de Ações</title>
    <style>
         
       body {
            font-family: 'Source Sans Pro', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            max-width: 800px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            text-align: center;
        }

        .header {
            margin-bottom: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-control select {
            width: 100%;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
<<<<<<< HEAD
            background-color: #24993B;
=======
            background-color: #186933;
>>>>>>> 243ff5241420bbf0bedc9382b2a2f4397c9e2caf
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th, .table td {
            border: 1px solid #ccc;
            padding: 10px;
        }

        .table th {
            text-align: left;
        }

        .table td {
            text-align: center;
        }

        .table-striped > tbody > tr:nth-of-type(even) {
            background-color: #f2f2f2;
        }

        .table-responsive {
            overflow-x: none;
        }

        .card-info {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin-top: 20px;
        }

        .card-info-item {
            width: 50%;
        }

        .card-info-item h3 {
            margin-top: 0;
        }

        .card-info-item p {
            font-size: 14px;
        }
        .link{
            font-size: 14px;
            color:rgb(100, 100, 100);
            hover:rgb(122, 124, 122); 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="header">
                <a href="{{ route('ativo') }}"> <img src="../images/logo.svg" style="max-width:80px" draggable="false"></a>
                <h2>Buscar Ação</h2>
            </div>
            <div class="body">
                <form method="POST" action="/api">
                    @csrf
                    <label for="codigo">Código da ação:</label>
                    <input type="text" id="codigo" name="codigo" class="form-control" style="width: 90%" required>
                    <br>
                    <label for="bolsa">Bolsa de Valores:</label>
                    <select name="bolsa" class="form-control">
                        <option value="BVMF">B3</option>
                        <option value="NYSE">NYSE</option>
                        <option value="NASDAQ">NASDAQ</option>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary">Buscar</button>
                    <br>
                    <div class="mensagem">
                
                        <p class="mensagem"><?php echo $mensagem; ?></p>
                    
                    </div>
                    @if (Route::has('ativo'))
                    <a class="link" href="{{ route('ativo') }}">
                        {{ __('Voltar para ativos') }}
                    </a>
                    @endif
                </form>
            </div>
            
        </div>
    </div>
</body>
</html>
