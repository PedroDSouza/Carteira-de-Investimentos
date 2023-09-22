<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Invest</title>
    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Inter');
        @import url('https://fonts.cdnfonts.com/css/source-sans-pro');

        .font-family-padrao {
            font-family: Source Sans Pro;
        }
        .font-family-p {
            font-family: Inter;
            font-size: 25px;
            font-weight: bold;
        }
        .flexbutton {
            gap: 1rem;
            justify-content: center;
        }

        .flexbutton input{
            border-radius: 5px;
        }

        .bgwhite{
            background-color:white;
            height: 600px;
            width: 600px;
            position: relative;
            left:200px;
            display: grid;
            place-items: center;
            border-radius: 15px;
        }
        .formtop{
            position: relative;
            top: -100px;
            margin-top: 0;
            z-index: 1;
        }
        body{
            background-image: url(./img/cadastro.png);
            background-color: #D7E8EE;
            background-repeat: no-repeat;
            background-position: left 100px top;
        }
        .cadastroright{
            position: relative;
            display: grid;
            place-items: center;
            left: 300px;
        }
        .formtop{
            position: relative;
            margin-top: 100px;
            z-index: 1;
        }
        .formleft{
            position: relative;
            top: 50px;
            left: 50px;
        }
    </style>
</head>
<body class="h-screen">

    <div class="font-family-padrao w-full flex flex-wrap">

        <!-- Register Section -->
        <div class="w-full flex flex-col cadastroright">
        <img src="../img/logo.png">
            <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-24">
                <img src="./img/logo.png">
            </div>

            <div class="flex flex-col justify-center items-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32 bgwhite">
                <div class="formleft">
                    <p class="text-center text-3xl font-family-p">Comece a investir!</p>
                    <form class="flex flex-col pt-3 md:pt-8 formtop" onsubmit="event.preventDefault();">
                        <div class="flex flex-col pt-4">
                            <label for="name" class="text-lg">Nome</label>
                            <input type="text" id="name" placeholder="user@invest.com" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" />
                        </div>

                        <div class="flex flex-col pt-4">
                            <label for="email" class="text-lg">Email</label>
                            <input type="email" id="email" placeholder="user@invest.com" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" />
                        </div>
        
                        <div class="flex flex-col pt-4">
                            <label for="password" class="text-lg">Senha</label>
                            <input type="password" id="password" placeholder="********" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" />
                        </div>

                        <div class="flex flex-col pt-4">
                            <label for="confirm-password" class="text-lg">Confirme sua senha</label>
                            <input type="password" id="confirm-password" placeholder="********" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" />
                        </div>
        
                        <input type="submit" value="Comece a investir" class="bg-blue-800 text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8" />
                    </form>
                </div>
            </div>

        </div>
    </div>

</body>
</html>
