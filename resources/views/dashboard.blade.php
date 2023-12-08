<?php

use Illuminate\Support\Facades\DB;
$connection = DB::connection();

$walletNames = DB::table('carteirausuario')->where('id', 1)->pluck('ativoid'); //Usar o ID de cada respectiva carteira -Pedro de Souza
$wallets = DB::table('carteirausuario')->get(); //Nomes das Carteiras -Pedro de Souza
$total = DB::table('ativos_Financeiros')->sum('valorAtivo');

$ativosFinanceiros = DB::table('ativos_Financeiros')
->select('nomeAtivo', 'valorAtivo', 'tipoAtivo', 'descricaoAtivo')
    ->get();

?>

<style>
    /* Estilização do Modal */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0,0.4);
        padding-top: 60px;
    }

    .modal-content {
        background-color: #fefefe;
        margin: 5% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
    .carteira-ativos {
        font-family: 'Arial', sans-serif;
        font-size: 24px;
        font-weight: bold;
        color: black;
        text-transform: uppercase;
    }
</style>



<x-app-layout>
    <x-slot name="header">
        <div class="container">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
        </div>
        <div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Ativos em posse') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-20 lg:px-20">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid flex-wrap gap-x-30 items-center justify-center mx-auto shadow-xl  rounded-xl bg-gray-50 p-6 text-gray-900" style="background: rgb(34,149,150); background: linear-gradient(266deg, rgba(34,149,150,1) 0%, rgba(131,218,160,1) 86%); display: flex; justify-content: center; align-items: center;">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-1">
                                @foreach($walletNames as $name)
                                <div class="d-flex justify-content-between align-items-center">
                                    <h1 class="carteira-ativos">Carteira {{ $name }}</h1>
                                </div>
                                @endforeach


                                @foreach ($ativosFinanceiros as $ativoFinanceiro)
                                    <div class="mb-4">
                                        <h1>{{ $ativoFinanceiro->nomeAtivo }}</h1>
                                        <h2>R$ {{ number_format($ativoFinanceiro->valorAtivo, 2, ',', '.') }}</h2>

                                        <!-- Botões de Editar e Excluir -->
                                        <div class="flex space-x-2 mt-2">
                                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="openEditModal('{{ $ativoFinanceiro->nomeAtivo }}', '{{ $ativoFinanceiro->tipoAtivo }}', '{{ $ativoFinanceiro->descricaoAtivo }}', '{{ $ativoFinanceiro->valorAtivo }}')">Editar</button>
                                            <form method="POST" action="{{ route('deletarativo') }}">
                                                @csrf
                                                <input type="hidden" name="nomeAtivoDeletar" value="{{ $ativoFinanceiro->nomeAtivo }}">
                                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Excluir</button>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach

                                <div id="editModal" class="modal">
                                    <div class="modal-content">
                                        <span class="close" onclick="closeModal('editModal')">&times;</span>

                                        <!-- Formulário de Edição de Ativo -->
                                        <form method="POST" action="{{ route('editarativo') }}">
                                            @csrf

                                            <div class="mb-2">
                                                <x-input-label for="ativoParaEditar" :value="__('Ativo a editar')" />
                                                <x-text-input id="ativoParaEditar" class="block mt-1 w-full" type="text" name="ativoParaEditar" readonly />
                                            </div>

                                            <!-- Título e campo para Nome do Ativo -->
                                            <div class="mb-2">
                                                <x-input-label for="nomeAtivoEditar" :value="__('Nome do ativo a editar')" />
                                                <x-text-input id="nomeAtivoEditar" class="block mt-1 w-full" type="text" name="nomeAtivoEditar" placeholder="Insira o nome do ativo a editar" required />
                                            </div>

                                            <!-- Título e campo para Novo Nome do Ativo -->
                                            <div class="mb-2">
                                                <x-input-label for="novoNomeAtivo" :value="__('Novo nome do ativo')" />
                                                <x-text-input id="novoNomeAtivo" class="block mt-1 w-full" type="text" name="novoNomeAtivo" placeholder="Insira o novo nome do ativo" required />
                                            </div>

                                            <!-- Título e campo para Tipo de Ativo -->
                                            <div class="mb-2">
                                                <x-input-label for="tipoAtivoEditar" :value="__('Tipo de ativo')" />
                                                <x-text-input id="tipoAtivoEditar" class="block mt-1 w-full" type="text" name="tipoAtivoEditar" placeholder="Insira o tipo de ativo" required />
                                            </div>

                                            <!-- Título e campo para Descrição do Ativo -->
                                            <div class="mb-2">
                                                <x-input-label for="descricaoAtivoEditar" :value="__('Descrição')" />
                                                <x-text-input id="descricaoAtivoEditar" class="block mt-1 w-full" type="text" name="descricaoAtivoEditar" placeholder="Insira a descrição do ativo" required />
                                            </div>

                                            <!-- Título e campo para Valor do Ativo -->
                                            <div class="mb-2">
                                                <x-input-label for="valorAtivoEditar" :value="__('Valor')" />
                                                <x-text-input id="valorAtivoEditar" class="block mt-1 w-full" type="text" name="valorAtivoEditar" placeholder="Insira o valor do ativo" required />
                                            </div>

                                            <div class="flex items-center justify-center py-2">
                                                <x-secondary-button type="submit">
                                                    {{ __('Editar ativo') }}
                                                </x-secondary-button>
                                            </div>
                                        </form>

                                        <!-- Botão para Deletar Ativo -->
                                        <form method="POST" action="{{ route('deletarativo') }}">
                                            @csrf
                                            <div class="mb-2">
                                                <x-input-label for="nomeAtivoDeletar" :value="__('Nome do ativo a deletar')" />
                                                <x-text-input id="nomeAtivoDeletar" class="block mt-1 w-full" type="text" name="nomeAtivoDeletar" required />
                                            </div>

                                            <div class="flex items-center justify-center py-2">
                                                <x-secondary-button type="submit">
                                                    {{ __('Deletar ativo') }}
                                                </x-secondary-button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-1">
                                    <canvas id="doughnutChart" width="205" height="205"></canvas>
                                <script>
                                    // Modal

                                        function openEditModal(nomeAtivo, tipoAtivo, descricaoAtivo, valorAtivo) {
                                            document.getElementById('ativoParaEditar').value = nomeAtivo;
                                            document.getElementById('novoNomeAtivo').value = nomeAtivo;
                                            document.getElementById('tipoAtivoEditar').value = tipoAtivo;
                                            document.getElementById('descricaoAtivoEditar').value = descricaoAtivo;
                                            document.getElementById('valorAtivoEditar').value = valorAtivo;
                                            document.getElementById('editModal').style.display = 'block';
                                        }

                                        function closeModal(modalId) {
                                            document.getElementById(modalId).style.display = 'none';
                                        }
                                    // Dados dos ativos financeiros

                                        const data = @json($data);

                                        const ctx = document.getElementById('doughnutChart').getContext('2d');
                                        new Chart(ctx, {
                                            type: 'doughnut',
                                            data: {
                                                labels: data.map(item => item.name),
                                                datasets: [{
                                                    data: data.map(item => item.percentage),
                                                    backgroundColor: [
                                                        'rgb(255, 99, 132)',
                                                        'rgb(54, 162, 235)',
                                                        'rgb(255, 69, 0)',
                                                        'rgb(255, 205, 86)',
                                                        'rgb(106,90,205)',
                                                        'rgb(0, 0, 139)'
                                                    ],
                                                }]
                                            },
                                            options: {
                                                responsive: true,
                                                maintainAspectRatio: false,
                                                plugins: {
                                                    legend: {
                                                        display: true,
                                                        position: 'right',
                                                    },
                                                    datalabels: {
                                                        display: true,
                                                        color: '#fff',
                                                        offset: 0,
                                                        formatter: (value, context) => {
                                                            return value.toFixed(2) + '%';
                                                        },
                                                        font: {
                                                            weight: 'bold',
                                                        },
                                                    },
                                                },
                                            }
                                        });
                                </script>
                            </div>
                            <div class="col-span-1">
                                <div class="mt-6 space-y-1">
                                    @foreach ($ativosFinanceiros as $ativoFinanceiro)
                                        <h1>{{ $ativoFinanceiro->nomeAtivo }}</h1>
                                        <h2>R$ {{ number_format($ativoFinanceiro->valorAtivo, 2, ',', '.') }}</h2>
                                    @endforeach

                                    @php
                                        echo '<p>Total da Carteira: R$' . number_format($total, 2, ',', '.') . '</p>';
                                    @endphp
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


                                        <!-- SEGUNDO-->
<div class="max-w-7xl mx-auto sm:px-20 lg:px-20">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="grid flex-wrap gap-x-30 items-center justify-center mx-auto shadow-xl rounded-xl bg-gray-50 p-6 text-gray-900" style="background: rgb(34,149,150); background: linear-gradient(266deg, rgba(34,149,150,1) 0%, rgba(131,218,160,1) 86%); display: flex; justify-content: center; align-items: center;">
            <div class="grid grid-cols-3 gap-6">
                <div class="col-span-1">

                    <!-- Adicionando a consulta para obter o NomeCarteira -->
                    @php
                    $nomeCarteira = DB::table('carteirausuario')->where('id', 3)->value('NomeCarteira');
                    $id = DB::table('carteirausuario')->where('id', 2)->value('id');
                    $QuantidadeAtivo = DB::table('carteirausuario')->where('id', 3)->value('QuantidadeAtivo');
                    @endphp
                    <div class="mb-4">
                        <h1>Nome da Carteira: {{ $nomeCarteira }}</h1>
                        <h1>ID: {{ $id }}</h1>
                        <h1>Quantidade da Carteira: {{ $QuantidadeAtivo }}</h1>
                    </div>


                    @foreach ($ativosFinanceiros as $ativoFinanceiro)
                        <div class="mb-4">
                            <h1>{{ $ativoFinanceiro->nomeAtivo }}</h1>
                            <h2>R$ {{ number_format($ativoFinanceiro->valorAtivo, 2, ',', '.') }}</h2>

                            <!-- Botões de Editar e Excluir -->
                            <div class="flex space-x-2 mt-2">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="openEditModal('{{ $ativoFinanceiro->nomeAtivo }}', '{{ $ativoFinanceiro->tipoAtivo }}', '{{ $ativoFinanceiro->descricaoAtivo }}', '{{ $ativoFinanceiro->valorAtivo }}')">Editar</button>
                                <form method="POST" action="{{ route('deletarativo') }}">
                                    @csrf
                                    <input type="hidden" name="nomeAtivoDeletar" value="{{ $ativoFinanceiro->nomeAtivo }}">
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Excluir</button>
                                </form>
                            </div>
                        </div>
                    @endforeach

                                <div id="editModal" class="modal">
                                    <div class="modal-content">
                                        <span class="close" onclick="closeModal('editModal')">&times;</span>

                                        <!-- Formulário de Edição de Ativo -->
                                        <form method="POST" action="{{ route('editarativo') }}">
                                            @csrf

                                            <div class="mb-2">
                                                <x-input-label for="ativoParaEditar" :value="__('Ativo a editar')" />
                                                <x-text-input id="ativoParaEditar" class="block mt-1 w-full" type="text" name="ativoParaEditar" readonly />
                                            </div>

                                            <!-- Título e campo para Nome do Ativo -->
                                            <div class="mb-2">
                                                <x-input-label for="nomeAtivoEditar" :value="__('Nome do ativo a editar')" />
                                                <x-text-input id="nomeAtivoEditar" class="block mt-1 w-full" type="text" name="nomeAtivoEditar" placeholder="Insira o nome do ativo a editar" required />
                                            </div>

                                            <!-- Título e campo para Novo Nome do Ativo -->
                                            <div class="mb-2">
                                                <x-input-label for="novoNomeAtivo" :value="__('Novo nome do ativo')" />
                                                <x-text-input id="novoNomeAtivo" class="block mt-1 w-full" type="text" name="novoNomeAtivo" placeholder="Insira o novo nome do ativo" required />
                                            </div>

                                            <!-- Título e campo para Tipo de Ativo -->
                                            <div class="mb-2">
                                                <x-input-label for="tipoAtivoEditar" :value="__('Tipo de ativo')" />
                                                <x-text-input id="tipoAtivoEditar" class="block mt-1 w-full" type="text" name="tipoAtivoEditar" placeholder="Insira o tipo de ativo" required />
                                            </div>

                                            <!-- Título e campo para Descrição do Ativo -->
                                            <div class="mb-2">
                                                <x-input-label for="descricaoAtivoEditar" :value="__('Descrição')" />
                                                <x-text-input id="descricaoAtivoEditar" class="block mt-1 w-full" type="text" name="descricaoAtivoEditar" placeholder="Insira a descrição do ativo" required />
                                            </div>

                                            <!-- Título e campo para Valor do Ativo -->
                                            <div class="mb-2">
                                                <x-input-label for="valorAtivoEditar" :value="__('Valor')" />
                                                <x-text-input id="valorAtivoEditar" class="block mt-1 w-full" type="text" name="valorAtivoEditar" placeholder="Insira o valor do ativo" required />
                                            </div>

                                            <div class="flex items-center justify-center py-2">
                                                <x-secondary-button type="submit">
                                                    {{ __('Editar ativo') }}
                                                </x-secondary-button>
                                            </div>
                                        </form>

                                        <!-- Botão para Deletar Ativo -->
                                        <form method="POST" action="{{ route('deletarativo') }}">
                                            @csrf
                                            <div class="mb-2">
                                                <x-input-label for="nomeAtivoDeletar" :value="__('Nome do ativo a deletar')" />
                                                <x-text-input id="nomeAtivoDeletar" class="block mt-1 w-full" type="text" name="nomeAtivoDeletar" required />
                                            </div>

                                            <div class="flex items-center justify-center py-2">
                                                <x-secondary-button type="submit">
                                                    {{ __('Deletar ativo') }}
                                                </x-secondary-button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-1">
                                    <canvas id="doughnutChart" width="205" height="205"></canvas>
                                <script>
                                    // Modal

                                        function openEditModal(nomeAtivo, tipoAtivo, descricaoAtivo, valorAtivo) {
                                            document.getElementById('ativoParaEditar').value = nomeAtivo;
                                            document.getElementById('novoNomeAtivo').value = nomeAtivo;
                                            document.getElementById('tipoAtivoEditar').value = tipoAtivo;
                                            document.getElementById('descricaoAtivoEditar').value = descricaoAtivo;
                                            document.getElementById('valorAtivoEditar').value = valorAtivo;
                                            document.getElementById('editModal').style.display = 'block';
                                        }

                                        function closeModal(modalId) {
                                            document.getElementById(modalId).style.display = 'none';
                                        }
                                    // Dados dos ativos financeiros

                                        const data = @json($data);

                                        const ctx = document.getElementById('doughnutChart').getContext('2d');
                                        new Chart(ctx, {
                                            type: 'doughnut',
                                            data: {
                                                labels: data.map(item => item.name),
                                                datasets: [{
                                                    data: data.map(item => item.percentage),
                                                    backgroundColor: [
                                                        'rgb(255, 99, 132)',
                                                        'rgb(54, 162, 235)',
                                                        'rgb(255, 69, 0)',
                                                        'rgb(255, 205, 86)',
                                                        'rgb(106,90,205)',
                                                        'rgb(0, 0, 139)'
                                                    ],
                                                }]
                                            },
                                            options: {
                                                responsive: true,
                                                maintainAspectRatio: false,
                                                plugins: {
                                                    legend: {
                                                        display: true,
                                                        position: 'right',
                                                    },
                                                    datalabels: {
                                                        display: true,
                                                        color: '#fff',
                                                        offset: 0,
                                                        formatter: (value, context) => {
                                                            return value.toFixed(2) + '%';
                                                        },
                                                        font: {
                                                            weight: 'bold',
                                                        },
                                                    },
                                                },
                                            }
                                        });
                                </script>
                            </div>
                            <div class="col-span-1">
                                <div class="mt-6 space-y-1">
                                    @foreach ($ativosFinanceiros as $ativoFinanceiro)
                                        <h1>{{ $ativoFinanceiro->nomeAtivo }}</h1>
                                        <h2>R$ {{ number_format($ativoFinanceiro->valorAtivo, 2, ',', '.') }}</h2>
                                    @endforeach

                                    @php
                                        echo '<p>Total da Carteira: R$' . number_format($total, 2, ',', '.') . '</p>';
                                    @endphp
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>









    </div>
</x-app-layout>
