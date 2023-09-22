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
        .fonte-branca {
            font-family: Inter;
            color: #FEFEFE;
            font-weight: bold;
            font-size: 36px;
        }
        .flexbutton {
            gap: 1rem;
            justify-content: center;
        }

        .flexbutton input{
            border-radius: 5px;
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
            width: 400px;
        }
        .formtop{
            position: relative;
            top: -100px;
            margin-top: 0;
            z-index: 1;
        }
    </style>
</head>
<body class="bg-white font-family-karla h-screen">
<div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-24">
                <img src ="./img/logo.png">
            </div> </br></br></br></br>

 
<div class="w-full flex flex-wrap bg-gray-100">
    

    <!-- Image Section -->
    <div class="w-2/2 shadow-2xl">
            <img class="object-cover w-full h-screen hidden md:block" src="./img/login.png">
        </div>
 
    <!-- Login Section --> 

        <div class="w-full md:w-1/2 flex flex-col">
            

            <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32 bgteal">
                <p class="text-center fonte-branca">Comece a investir.</p>
                    <form class="flex flex-col formtop" onsubmit="event.preventDefault();">
                        <div class="flex flex-col pt-4">
                            <label for="email" class="text-lg">Email</label>
                            <input type="email" id="email" placeholder="user@invest.com" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
        
                        <div class="flex flex-col pt-4">
                            <label for="password" class="text-lg">Senha</label>
                            <input type="password" id="password" placeholder="********" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
        
                        <div class="flex w-full justify-content-center flexbutton">
                            <input type="submit" value="Entrar" class="bg-blue-800 text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8"> </a>
                           <!-- Substituir pela rota --> <a href="#"><input type="submit" value="Criar conta" class="bg-blue-800 text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8"></a>
                        </div>
                    </form>
            </div>

            </div>
       
    </div>

</body>
</html>