function cadastrarUser() {

    var dados = {
        acao: "cadastrarUsuario",
        nome: $("#nome").val(),
        sobrenome: $("#sobrenome").val(),
        email: $("#email").val(),
        nascimento: $("#nascimento").val(),
        senha: $("#senha").val(),
        genero: $("input[name='gender']:checked").val()
    };

    if (dados.nome != '' || dados.sobrenome != '' || dados.email != '' ||
        dados.nascimento != '' || dados.senha != '' || dados.confirmSenha != ''|| dados.genero != '') {

    $.ajax({
        method: "POST",
        url: "../ajax/usuarios.php",
        dataType: 'json',
        data: dados,
        success: function(data) {
            console.log(data)
            if (data['error']) {
                //alert(data['error'])
                } else {
                    //alert(data['error'])
                }
            },
            error: function (data) {
            //Exibe alerta error
            toastr["error"]("Ocorreu um erro!");
            }

        });
    } else {
        //Exibe alerta campos obrigatórios
        toastr["info"]("Preencha os campos Obrigatórios!");
    }
}
