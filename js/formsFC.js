// Toast Config

toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}


function cadastrarUser() {

    var dados = {
        acao: "cadastrarUsuario",
        nome: $("#nome").val(),
        sobrenome: $("#sobrenome").val(),
        email: $("#email").val(),
        nascimento: $("#nascimento").val(),
        senha: $("#senha").val(),
        confirmSenha: $("#csenha").val(),
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
