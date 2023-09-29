@extends('master')

@section('content')

<div class="h-screen w-screen bg-blue-950">

  <div class="container flex w-full p-4  px-0 justify-left items-start antialiased">
    <div class="text-white">
      <p class="text-xl font-bold">Transações<p>
      <p class="text-sm">Conduza seu futuro financeiro:<p>
    </div>
  </div>

  <div class="flex  h-3/4  items-center lg:gap-56  bg-slate-200 border rounded-lg md:shrink-0 md:container md:mx-auto">

      <img src="/img/woman-office.svg" class="object-scale-down w-auto h-full" alt="">

        <form class="shadow-md col-4 rounded px-8 py-3  text-base md:shrink-0 antialiased bg-[#687190]">
          <div class="mb-2">
            <label class="block  text-white font-medium mb-2" for="ativoID ">
              Selecione um ativo
            </label>
            <select
              class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
              id="ativoID"
              name="ativoID"
            >
              <option value="1"></option>
              <option value="2">Ativo 2</option>
              <option value="3">Ativo 3</option>
            </select>
          </div>
          <div class="mb-2">
            <label class="block text-white font-medium mb-2" for="ativoID">
              Tipo de transação
            </label>
            <select
              class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
              id="ativoID"
              name="ativoID">
              <option value="1"></option>
              <option value="2">Transação 2</option>
              <option value="3">Transação 3</option>
            </select>
          </div>
          <div class="mb-2">
            <label class="block text-white  font-medium mb-2" for="quantidade">
              Quantidade
            </label>
            <input
              class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
              id="quantidade"
              type="number"
              name="quantidade"
              value=""
            />
          </div>
          <div class="mb-2">
            <label class="block text-white font-medium mb-2" for="precoPorUnidade">
              Preço (Unidade)
            </label>
            <input
              class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
              id="precoPorUnidade"
              type="number"
              name="precoPorUnidade"
              value=""
            />
          </div>
          <div class="flex items-center justify-center mt-4  font-medium">
          <a href="/investidor"
            class="px-4 py-2 rounded-full  text-white bg-blue-950 hover:bg-blue-900 focus:outline-none focus:shadow-outline rounded-full"
            type="submit"
            >
            Mostrar carteira
    </a>
    
          </div>
        </form>



  </div>




  

</div>



@endsection


