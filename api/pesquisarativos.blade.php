<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Pesquisar Ativos') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid flex-wrap gap-x-10 items-center justify-center grid-cols-1 mx-auto shadow-xl lg:grid-cols-2 rounded-xl  bg-gray-50 p-6 text-gray-900">

                    <div class="hidden lg:block w-full sm:max-w-md  overflow-hidden sm:rounded-lg">
                        <img class="object-cover h-full bg-cover rounded-l-lg" src="./images/imgPesquisarAtivos.svg" alt="Carteira">
                    </div>

                    <div class="px-3 py-3">
                        <div class="w-full sm:max-w-md px-8 py-4 shadow-md overflow-hidden sm:rounded-lg rounded-lg" style="background: linear-gradient(266deg, rgba(34,149,150,1) 0%, rgba(131,218,160,1) 86%);">
                            <!-- Form -->
                            <div class="mt-6 space-y-1">

                                <form method="POST" action="{{ route('carteiras')}}">
                                    @csrf

                                    <!-- Tipo de transação -->
                                    <div class="mb-2">
                                        <x-input-label for="tipoCarteira" :value="__('Pesquisar Ativo')" />
                                        <x-text-input id="tipoCarteira" class="block mt-1 w-full" type="text" name="tipoCarteira" :value="old('tipoTransacao')" required autofocus autocomplete="tipoTransacao" />
                                        <x-input-error :messages="$errors->get('tipoCarteira')" class="mt-2" />
                                    </div>

                                     <!-- Botão -->
                                     <div class="flex items-center justify-center py-10">
                                        <x-secondary-button>
                                            {{ __('Pesquisar Ativo') }}
                                        </x-secondary-button>
                                    </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
