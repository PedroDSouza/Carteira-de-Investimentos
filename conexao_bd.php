<?php

$host = 'localhost'; 
$usuario = 'root';
$senha = 'masterkey';
$banco = 'carteira';


$conexao = new mysqli($host, $usuario, $senha, $banco);


if ($conexao->connect_error) {

    echo('Não foi possível conectar ao Banco de Dados ' . $conexao->connect_error);
    
} else {

    echo('Conectado com sucesso!');

}
?>
