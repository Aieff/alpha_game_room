$(document).ready(function () {
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
});


function cadastrarUser() {

    // Recebe os dados vindos do formulario
    var dados = {
        acao: "cadastrarUsuario",
        nome: $("#inputFormName").val(),
        sobrenome: $("#inputFormLastName").val(),
        email: $("#inputFormEmail").val(),
        nascimento: $("#inputFormBirthday").val(),
        password: $("#inputFormPassword").val(),
        confirmPassword: $("#inputFormCPassword").val(),
        genero: $("input[name='gender']:checked").val()
    };

    if (dados.nome != '' || dados.sobrenome != '' || dados.email != '' ||
        dados.nascimento != '' || dados.password != '' || dados.confirmPassword != ''|| dados.genero != '') {

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
            toastr["warning"](`Ocorreu um erro!`);
            }

        });
    } else {
        //Exibe alerta campos obrigatórios
        toastr["warning"](`Preencha os campos Obrigatórios!`);
    }
}
