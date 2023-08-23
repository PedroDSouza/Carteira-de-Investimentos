$(document).ready(function() {
    $("#inserirButton").click(function() {
        var ativoNome = $("#nomeAtivo").val();
        if (ativoNome) {
            $.ajax({
                type: "POST",
                url: "inserir_ativo.php",
                data: {
                    nome: ativoNome
                },
                success: function(response) {
                    alert(response);
                }
            });
        }
    });
});