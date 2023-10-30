


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


                                <!-- Aqui vai ser inserido todo e qualquer código referente ao dashboard
                                        O dashboard será nomeado de carteira e irá conter:
                                        - Todo os retornos da API
                                        - Um gráfico de pizza que mostra os respectivos valores dos ativos criados na página de Ativos
                                        - Já as carteiras ao lado mostra todo o conteudo inseridos tanto do form de ativos quanto do form de transações (um model será criado para mostrar todo o conteúdo da carteira)

                                    -->
                                    <canvas id="doughnutChart" width="800" height="400"></canvas>
                                <!-- Bar Chart Script -->
                                <script>

                                    // Dados dos ativos financeiros

                                    const ativos = @json($ativos);
                                    console.log(ativos);
                                    // Extrair nomes e valores dos ativos para o gráfico
                                    const nomesAtivos = ativos.map(ativo => ativo.nomeAtivo);
                                    const valoresAtivos = ativos.map(ativo => ativo.valorAtivo);

                                    // Configurar o contexto do gráfico
                                    const ctx = document.getElementById('doughnutChart').getContext('2d');

                                    // Criar o gráfico de barras
                                    new Chart(ctx, {
                                        type: 'doughnut',
                                        data: {
                                            labels: nomesAtivos,
                                            datasets: [{
                                                label: 'ValorAtual',
                                                data: valoresAtivos,
                                                backgroundColor: 'rgba(54, 162, 235, 0.7)',
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            responsive: true,
                                            scales: {
                                                x: {
                                                    beginAtZero: true
                                                },
                                                y: {
                                                    beginAtZero: true
                                                }
                                            }
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
