<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carteira de Investimentos</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="images/wallet.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="icon" id="toggle">
                <img src="images/wallet.png" alt="Ícone">
            </div>
        </div>

        <div class="content">
            <div class="container">
            <div id="carteira" class="hidden">
                <div class="info-carteira">
                    <h2>CARTEIRA 1</h2>
                    <p>Total em R$: <span id="total-r">5000.00</span></p>
                    <p>Total em Dólar: <span id="total-usd">1000.00</span></p>
                </div>

            <div class="fechar-carteira" id="fechar">
                <img src="images/close.png" alt="Fechar">
            </div>

        </div>
    </div>
</body>
</html>

<script>

var botaoFechar = document.getElementById("fechar");

var carteira = document.getElementById("carteira");

botaoFechar.addEventListener("click", function () {
    carteira.style.display = "none";
});

document.getElementById("toggle").addEventListener("click", function () {
    var carteira  = document.getElementById("carteira");
    if (carteira.style.display === "none" || carteira.style.display === "") {
        carteira.style.display = "block";
    } else {
        carteira.style.display = "none";
    }
});

</script>
