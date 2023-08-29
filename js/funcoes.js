// Function save Users
function inciarLogin() {
    document.querySelector('#form').classList.add("disabled");
}

// Reseta os meus campos e exibe um Toast de sucesso
function resetInputsForms(){
    $("#nome").val("");
    $("#sobrenome").val("");
    $("#email").val("");
    $("#nascimento").val("");
    $("#senha").val("");
    $('input[name=gender]').prop('checked',false);
    $("#csenha").val("");

    toastr["success"]("Cadastrado com sucesso!");
}

function cadastrarUser() {

    // Armazena a data e hora atual do cadastro
    const inicio = new Date().toLocaleString();

    var dados = {
        acao: "cadastrarUsuario",
        nome: $("#nome").val(),
        sobrenome: $("#sobrenome").val(),
        email: $("#email").val(),
        nascimento: $("#nascimento").val(),
        senha: $("#senha").val(),
        inicio: inicio
    };

    // Valida o meu E-mail

    const emailValue = email.value?.trim();
    let csenha = $("#csenha").val()

    function isEmail(email) {
        return /^\w+([.-]?\w+)@\w+([.-]?\w+)(.\w{2,3})+$/.test(
          email
        );
      }

    if (!isEmail(emailValue)) {
        toastr["info"]("E-mail inválido");
        return false
      }

    // Valida se minhas senhas são iguais
    else if (dados.senha != csenha) {
        toastr["info"]("Senhas não Coincidem!");
    }

      // Valida meus campos e envia meus dados por um Json para meu ajax.php

    else if (dados.nome != '' || dados.sobrenome != '' || dados.email != '' ||
        dados.nascimento != '' || dados.senha != '' || dados.confirmSenha != '') {

            $.ajax({
                method: "POST",
                url: "../ajax/usuarios.php",
                dataType: 'json',
                data: dados,
                success: function(data) {
                    console.log(data)
                    if (data['error']) {
                        // alert(data['error'])
                        } else {
                            //alert(data['error'])
                        }
                        resetInputsForms();
                    },
                    error: function (data) {
                    toastr["info"]("Preencha os campos Obrigatórios!");
                    }
                });
            }
        }

