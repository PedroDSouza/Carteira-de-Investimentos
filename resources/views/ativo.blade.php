<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Criar um ativo') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid flex-wrap gap-x-10 items-center justify-center grid-cols-1 mx-auto shadow-xl lg:grid-cols-2 rounded-xl  bg-gray-50 p-6 text-gray-900">

                    <div class="hidden lg:block w-full sm:max-w-md  overflow-hidden sm:rounded-lg">
                        <img class="object-cover h-full bg-cover rounded-l-lg" src="./images/imgAtivo.svg" alt="">
                    </div>


                    <div class="px-3 py-3">
                        <div class="w-full sm:max-w-md px-8 py-4 shadow-md overflow-hidden sm:rounded-lg rounded-lg" style="background: linear-gradient(266deg, rgba(34,149,150,1) 0%, rgba(131,218,160,1) 86%);">
                            <!-- Form -->
                            <div class="mt-6 space-y-1">

                                <form method="GET" action="{{ route('ativo') }}">
                                    @csrf

                                    <!-- Nome do ativo -->
                                    <div class="mb-2">
                                        <x-input-label for="nomeAtivo" :value="__('Nome do ativo')" />
                                        <x-text-input id="nomeAtivo" class="block mt-1 w-full" type="text" name="nomeAtivo" :value="old('nomeAtivo')" required autofocus autocomplete="nomeAtivo" />
                                        <x-input-error :messages="$errors->get('nomeAtivo')" class="mt-2" />
                                    </div>

                                    <!-- Tipo do ativo -->
                                    <div class="mb-2">
                                        <x-input-label for="tipoAtivo" :value="__('Tipo de ativo')" />
                                        <x-text-input id="tipoAtivo" class="block mt-1 w-full" type="text" name="tipoAtivo" :value="old('tipoAtivo')" required autofocus autocomplete="tipoAtivo" />
                                        <x-input-error :messages="$errors->get('tipoAtivo')" class="mt-2" />
                                    </div>

                                    <!-- Descrição -->
                                    <div class="mb-2">
                                        <x-input-label for="descricaoAtivo" :value="__('Descrição')" />
                                        <x-text-input id="descricaoAtivo" class="block mt-1 w-full" type="text" name="descricaoAtivo" :value="old('descricaoAtivo')" required autofocus autocomplete="descricaoAtivo" />
                                        <x-input-error :messages="$errors->get('descricaoAtivo')" class="mt-2" />
                                    </div>

                                    <!-- Valor do Ativo -->
                                    <div class="mb-2">
                                        <x-input-label for="valorAtivo" :value="__('Valor')" />
                                        <x-text-input id="valorAtivo" class="block mt-1 w-full" type="text" name="valorAtivo" :value="old('valorAtivo')" required autofocus autocomplete="valorAtivo" />
                                        <x-input-error :messages="$errors->get('valorAtivo')" class="mt-2" />
                                    </div>

                                    <!-- Botões -->
                                    <div class="flex items-center justify-center py-2">
                                        <x-secondary-button type="submit">
                                            {{ __('Criar ativo') }}
                                        </x-secondary-button>
                                    </div>

                                    <div class="flex items-center justify-center py-2">
                                        <a href="{{ route('api') }}">
                                            <x-secondary-button>
                                                {{ __('Buscar ação') }}
                                            </x-secondary-button>
                                        </a>
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
