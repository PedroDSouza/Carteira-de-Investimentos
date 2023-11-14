<?php 

use Illuminate\Support\Facades\DB;
$connection = DB::connection();

$walletNames = DB::table('wallet')->where('id', 1)->pluck('nome'); //Usar o ID de cada respectiva carteira -Pedro de Souza
$total = DB::table('ativos_Financeiros')->sum('valorAtivo');

$ativosFinanceiros = DB::table('ativos_Financeiros')
    ->select('nomeAtivo', 'valorAtivo')
    ->get();


?>


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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid flex-wrap gap-x-10 items-center justify-center grid-cols-1 mx-auto shadow-xl lg:grid-cols-2 rounded-xl  bg-gray-50 p-6 text-gray-900">
                    <div class="px-3 py-3">
                        <div class="w-full sm:max-w-md px-8 py-4 shadow-md overflow-hidden sm:rounded-lg rounded-lg" style="background: rgb(34,149,150);  background: linear-gradient(266deg, rgba(34,149,150,1) 0%, rgba(131,218,160,1) 86%);">
                            <div class="mt-6 space-y-1">

                                @foreach($walletNames as $name)
                                <div class="d-flex justify-content-between align-items-center">
                                    <h1>{{ $name }}</h1>

                                </div>


                                @endforeach







                                    <canvas id="doughnutChart" width="800" height="550"></canvas>
                                <script>
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

                            <div class="mt-6 space-y-1">

                                @foreach ($ativosFinanceiros as $ativoFinanceiro)
                                    
                                        <h1>{{ $ativoFinanceiro->nomeAtivo }}</h1>
                                        <h2>R$ {{ number_format($ativoFinanceiro->valorAtivo, 2, ',', '.') }}</h2>
                                   
                                @endforeach

                            </div>
  
                        @php

                            echo '<p>Total da Carteira: R$' . number_format($total, 2, ',', '.') . '</p>';
                    
                        @endphp
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
