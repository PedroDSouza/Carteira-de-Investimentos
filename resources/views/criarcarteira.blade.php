<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Invest</title>
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
            color:#FEFEFE;
            font-weight: bold;
            font-size: 36px;
        }
        .flexbutton {
            gap: 2rem;
            justify-content: center;
        }

        .flexbutton input{
            border-radius: 40px;
        }

        .bgteal{
            background-color:#76D9CA;
            height: 600px;
            width: 600px;
            position: relative;
            left:200px;
            display: grid;
            place-items: center;
            border-radius: 15px;
        }

        .formgray{
            background-color: #FEFEFE;
            border-radius: 15px;
            height: 400px;
            width: 600px;
        }
        .formtop{
            position: relative;
            top: -100px;
            margin-top: 0;
            z-index: 1;
        }

        .flex-col-pt-4 {
            width: 400px;
           
        }
    </style>
</head>
<body class="bg-white font-family-karla h-screen">
<div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-24">
                <img src ="./img/logo.png">
            </div> </br></br></br></br>

 
<div class="w-full flex flex-wrap bg-gray-100">
    

    <!-- Image Section -->
    <div class="w-1/2 shadow-2xl">
            <img class="object-cover w-full h-screen hidden md:block" src="./img/office.png">
        </div>
 
    <!-- Login Section --> 

        <div class="w-full md:w-1/2 flex flex-col">
        
            <div class="flex flex-col justify-center md:auto my-10 pt-8 md:pt-1 px-8 md:px-40 lg:px-40 bgteal">
                    <form class="flex flex-col formtop" onsubmit="event.preventDefault();">
                        <div class="flex flex-col pt-4">
                            <input type="name" id="name" placeholder="Nome do ativo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
        
                        <div class="flex flex-col pt-4">
                            <input type="text" id="tipo" placeholder="Tipo do ativo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                        </div>

                        <div class="flex flex-col pt-4">
                            <input type="text" id="descricao" placeholder="Descrição" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        
                        <div class="flex flex-col pt-4">
                            <input type="text" id="valortual" placeholder="Valor Atual" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
        
                        <div class="flex flex-col pt-4">
                            <input type="date" id="valortual" placeholder="Valor Atual" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                        </div>

                        <div class="flex w-full justify-content-center flexbutton">
                           <input  type="submit" value="Criar ativo" onclick="window.location.href = '/carteira'" class="bg-blue-800 text-white font-bold text-lg hover:bg-gray-700 p-2 px-5 mt-8">
                        </div>
                    </form>
            </div>

            </div>
       
    </div>

</body>
</html>