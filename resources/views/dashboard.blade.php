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

<<<<<<< HEAD
                                    <?php

                                        $hostname = "localhost";
                                        $username = "root";
                                        $password = "masterkey";
                                        $database = "carteira";

                                        $mysqli = new mysqli($hostname, $username, $password, $database);

                                        if ($mysqli->connect_error) {
                                            die("Erro ao trazer os ativos: " . $mysqli->connect_error);
                                        }else {

                                            $sql = "SELECT nomeAtivo, valorAtivo FROM ativos_financeiros ORDER BY nomeAtivo";
                                            $result = $mysqli->query($sql);
                                        
                                            if ($result->num_rows > 0) {
                                                echo '<ul>';
                                                while ($row = $result->fetch_assoc()) {
                                                    echo '<li>' . $row['nomeAtivo'] . ', Valor: ' . $row['valorAtivo'] . 'R$</li>';
                                                }
                                                echo '</ul>';
                                            } else {
                                                echo 'Nenhum ativo cadastrado.';
                                            }


                                          
                                        }
                                        

                                    ?>

=======
>>>>>>> 243ff5241420bbf0bedc9382b2a2f4397c9e2caf
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
