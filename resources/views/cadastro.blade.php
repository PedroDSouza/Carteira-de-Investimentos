<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/cadastro_styles.css">
    <title>Cadastro Invest</title>
    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Inter');
        @import url('https://fonts.cdnfonts.com/css/source-sans-pro');

        body{
            background-color: #f2f2f2;
            background-position: left 100px top;
        }
        
    </style>
</head>
<body>
    <div class="main">
        <div class="img">
            <img src="../img/logo.png">
        </div>
        <div class="box">
            <div class="ing">
                <img src="../img/cadastro.png">
            </div>
            
                

            <!-- Register Section -->
            <div class="w-full flex flex-col cadastroright">
                <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-24">
                </div>

                <div class="divcad flex flex-col justify-start items-start md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32 bgwhite">
                    <div class="formleft">
                        <p class="fntbold text-center text-4xl font-family-p">Cadastre-se</p>
                        <form class="flex flex-col pt-3 md:pt-8 formtop" onsubmit="event.preventDefault();" style="width: 130%;">
                            <div class="flex flex-col pt-4">
                            <div class="flex items-center"> 
                                <label for="name" class="text-lg mr-4">Nome</label>
                                <input type="text" id="name" placeholder="user@invest.com" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline bg-gray-200 mr-2" />
                            </div>

                            <div class="flex flex-col pt-4">
                            <div class="flex items-center"> 
                                <label for="email" class="text-lg mr-4">E-mail</label>
                                <input type="email" id="email" placeholder="user@invest.com" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline bg-gray-200" />
                            </div>
            
                            <div class="flex flex-col pt-4">
                            <div class="flex items-center"> 
                                <label for="password" class="text-lg mr-4">Senha</label>
                                <input type="password" id="password" placeholder="********" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline bg-gray-200" />
                            </div>

                            <div class="flex justify-center">
                            <input type="submit" value="Comece a investir" onclick="window.location.href = '/investidor'" value="Comece a investir" class="bgblue text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8 rounded"/> </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
