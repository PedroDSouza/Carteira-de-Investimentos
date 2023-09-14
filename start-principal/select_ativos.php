<?php

    $select_ativos = "SELECT NOME FROM ATIVO ORDER BY NOME";

    $resultado = $conexao->query($select_ativos);

    if ($resultado->num_rows > 0){

        while($row = $resultado->fetch_assoc()){

            echo "<li>" . $row["NOME"] . "</br>";

        }
    } else {

        echo "Nenhum ativo cadastrado!";

    }

    $conexao->close();

?>