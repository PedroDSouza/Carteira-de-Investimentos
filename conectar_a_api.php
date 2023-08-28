<?php

    $url_dolar   = 'https://economia.awesomeapi.com.br/last/USD-BRL';
    $url_euro    = 'https://economia.awesomeapi.com.br/last/EUR-BRL';
    $url_bitcoin = 'https://economia.awesomeapi.com.br/last/BTC-BRL';

    $resposta_dolar   = file_get_contents($url_dolar);
    $resposta_euro    = file_get_contents($url_euro);
    $resposta_bitcoin = file_get_contents($url_bitcoin);


    print($resposta_dolar);
    print($resposta_euro);
    print($resposta_bitcoin);
    
?>