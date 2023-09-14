<?php

    session_start();
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "localhost:80/?usuario=admin&email=" . $email . "&banco=admin&empresa=1&comando=login%20" . $email . ";" . $senha,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $resposta = curl_exec($curl);

        curl_close($curl);

        if($resposta == "Senha Incorreta") {

            echo "<script>alert('Senha Incorreta');</script>";

        }
        else {
            $variaveis = explode(";",$resposta);
            $token = $variaveis[0];
            $empresa = $variaveis[2];

            $_SESSION["senha"] = $senha;
            $_SESSION["token"] = $token;
            $_SESSION["sistema"] = "carteira";
            header("Location: carteira.php");
        }
    } 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Carteira de Investimentos</title>
    <link href="css/login-style.css" rel="stylesheet">
    <link rel="icon" href="images/wallet.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>

  

    <main>
            <div class="container">
                <div class="form-box">
                        <img src="images/wallet.png" alt="Logo" class="img-fluid" draggable="false" width="50">
                    <div class="form-box-inputs">
                         <form method="POST" action="">
                            <p>E-mail:</p>
                            <input type="text" name="email" placeholder="Digite o seu email" class="form-control" required><br>
                            <p>Senha:</p>
                            <input type="password" name="senha" placeholder="Digite a sua senha" class="form-control" autocomplete="current-password"><br>
                            <input type="submit" name="btnLogin" value="Acessar" class="btn custom-button btn-block">
                            </form>
                    </div>
                </div>
            </div>
    </main>



</body>
</html>