<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login_styles.css">
    <title>Login Invest</title>
    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Inter');
        @import url('https://fonts.cdnfonts.com/css/source-sans-pro');
    </style>
</head>
<body>
    <div class="img">
        <img src="./img/logo.png">
    </div>

    <div class="w-full flex flex-wrap">

        <!-- Image Section -->
        <div class="img-section md:w-1/2 flex justify-end items-center md:pl-6">
            <img class="h-screen p-8 my-auto" src="./img/login.png">
        </div>

        <!-- Login Section -->

        <div class="w-full md:w-1/2 flex flex-col">

            <div class="flex flex-col justify-end md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32 bgteal">
                <p class="text-center fonte-branca mt-32">Comece a investir</p>
                <form class="flex flex-col formtop" onsubmit="event.preventDefault();">
                        <div class="bg-white p-10 shadow-2x1" >
                            <div class="flex flex-col pt-4">
                            <div class="flex items-center">
                            <label for="email" class="text-lg mr-2">E-mail</label>
                            <input type="email" id="email" placeholder="user@invest.com" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700  bg-gray-200 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                        </div>

                            <div class="flex flex-col pt-4">
                            <div class="flex items-center">
                            <label for="password" class="text-lg mr-2">Senha</label>
                            <input type="password" id="password" placeholder="********" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700   bg-gray-200  mt-1 leading-tight focus:outline-none focus:shadow-outline">
                        </div>

                        <div class="flex w-full justify-content-center flexbutton">
                          <input  type="submit" value="Entrar" onclick="window.location.href = '/investidor'" class="bg-blue-900 text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8"> 
                           <!-- Substituir pela rota --> <input type="submit" value="Cadastrar" onclick="window.location.href = '/cadastro'" class="bg-blue-900 text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8">
                        </div>
                    </form>
                </div>
            </div>
      </div>

</body>
</html>
