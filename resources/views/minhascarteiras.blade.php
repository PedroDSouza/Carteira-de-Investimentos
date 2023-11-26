<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Minhas Carteiras') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid flex-wrap gap-x-10 items-center justify-center grid-cols-1 mx-auto shadow-xl lg:grid-cols-2 rounded-xl bg-gray-50 p-6 text-gray-900">

                    <div class="hidden lg:block w-full sm:max-w-md overflow-hidden sm:rounded-lg">
                        <img class="object-cover h-full bg-cover rounded-l-lg" src="./images/imgMinhasCarteiras.svg" alt="Carteira">
                    </div>

                    <div class="px-3 py-3">
                        <div class="w-full sm:max-w-md px-8 py-4 shadow-md overflow-hidden sm:rounded-lg rounded-lg"
                            style="background: linear-gradient(266deg, rgba(34,149,150,1) 0%, rgba(131,218,160,1) 86%);
                                     text-white;">

                            <div class="mt-6 space-y-1"  style="font color: #fff">
                                @if(session('success'))
                                    <div class="mb-3 text-white">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <h1 style="font-weight: bold; color: #fff;">Lista de Minhas Carteiras</h1>

                                @if(count($minhascarteiras) > 0)
                                    <ul style="color: #fff">
                                        @foreach($minhascarteiras as $minhascarteira)
                                            <li style="color: #fff" >{{ $minhascarteira->NomeCarteira }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p>Nenhuma carteira encontrada.</p>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
