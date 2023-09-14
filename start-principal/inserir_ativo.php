<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'conexao_bd.php'; // Inclui o arquivo de conexão

    $nome = $_POST['nome'];

    $sql = "INSERT INTO ativo (nome) VALUES ('$nome')";

    if ($conexao->query($sql) === TRUE) {
        echo "Ativo inserido com sucesso!";
    } else {
        echo "Erro ao inserir ativo: " . $conexao->error;
    }

    $conexao->close();
} else {
    echo "Método inválido.";
}
?>
