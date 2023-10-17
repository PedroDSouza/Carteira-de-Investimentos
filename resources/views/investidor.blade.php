<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/pagina_do_investidor_styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3&display=swap" rel="stylesheet">
    <title>Página do Investidor</title>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <a href="/investidor" id="icon1" class="item1"><span class="icon"><img src="./img/investidor.png" alt="Investidor" height="35px" style="padding-left:40px;"></span></a>
            <a href="/carteira" id="icon1" class="item1"><span class="icon"><img src="./img/pcarteira.png" alt="Investidor" height="35px" style="padding-left:40px;"></span></a>
            <a href="/transacao" id="icon1" class="item1"><span class="icon"><img src="./img/ptransacao.png" alt="Investidor" height="35px" style="padding-left:40px;"></span></a>
            <a href="./" id="icon1" class="item1"><svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16" height="35px" style="padding-left:40px;"><path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"></path>
</svg></a>
        </div>
        <div class="content-container">
    <div class="left-content">
        <div class="content">
            <div class="top-row">
                <h3>Carteiras</h3>
                <button  type="submit" value="Adicionar +" onclick="window.location.href = '#'" class="add-button">Adicionar +</button> 
            </div>
       

<!--INÍCIO CONTAINERS DAS CARTEIRAS!!!!!-->
@foreach ($ativosFinanceiros as $ativo)
   <p>{{ $ativo->NOMEATIVO }}</p>
@endforeach

        </div>
    </div>
    <div class="sub-container">
        <!-- aqui eu vou colocar o GRÁFICO!!! -->
        <p>GRÁFICO</p>
        <img src="./img/grafico.png" alt="Grafico" width="80%" style="padding-left:40px;" draggable="false">
    </div>
</div>
    </div>
</body>
</html>
