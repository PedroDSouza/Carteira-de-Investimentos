<?php include "conexao_bd.php" ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carteira de Investimentos</title>
    <link rel="stylesheet" href="carteira_main_styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="inserir_ativo.js"></script>
</head>
<body>
    <header>
        <h1>Carteira de Investimentos</h1>
    </header>
    
    <main>
        <h2>Resumo da Carteira</h2>
        <p>Esta é a minha carteira de investimentos, onde mantenho uma diversificação de ativos visando alcançar meus objetivos financeiros.</p>
        
        <h2>Ativos Principais</h2>
        <ul id="lista-ativos">

           <?php include "select_ativos.php" ?>

        </ul>
    </main>

    <main>
        <h2><i>Ativos</i></h2>
        
        <input type="text" id="nomeAtivo" placeholder="Nome do Ativo"/>
        <button type="button" id="inserirButton" style="margin-bottom: 10px;">Adicionar Ativo</button>
      
    </main>
    
    <footer>
        <p>&copy; 2023 IFSP Guarulhos - 5º Semestre</p>
    </footer>
</body>
</html>
