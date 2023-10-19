<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Ativos em posse') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid flex-wrap gap-x-10 items-center justify-center grid-cols-1 mx-auto shadow-xl lg:grid-cols-2 rounded-xl  bg-gray-50 p-6 text-gray-900">
                    <div class="px-3 py-3">
                        <div class="w-full sm:max-w-md px-8 py-4 shadow-md overflow-hidden sm:rounded-lg rounded-lg" style="background: rgb(34,149,150);  background: linear-gradient(266deg, rgba(34,149,150,1) 0%, rgba(131,218,160,1) 86%);">
                            <div class="mt-6 space-y-1">

                                    <!--Aqui vai ser inserido todo e qualquer código referente ao dashboard 
                                        O dashboard será nomeado de carteira e irá conter:
                                        - Todo os retornos da API
                                        - Um gráfico de pizza que mostra os respectivos valores dos ativos criados na página de Ativos
                                        - Já as carteiras ao lado mostra todo o conteudo inseridos tanto do form de ativos quanto do form de transações (um model será criado para mostrar todo o conteúdo da carteira)
                                    -->
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
