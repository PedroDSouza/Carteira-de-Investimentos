<?php
include_once "conexao_bd.php";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    echo("Erro de conexão com o banco de dados: " . $conn->connect_error);
}


$sqltotalreal = "SELECT totalreal FROM carteira WHERE CODCARTEIRA = 1";
$result = $conn->query($sqltotalreal);

echo $result;

?>