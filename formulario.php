<?php 
include_once "layout/head.php";
include_once "configuracoes.php";
?>

<body>
    <div class="container">

        <div class="form-image">
            <img src="image/bg-forms.png">
        </div>
        <div class="form">
            <form>
                <div class="form-header">
                    <div class="title">
                    <img src="image/logo.png">
                        <h1>ARE YOU READY <span>?</span></h1>
                    </div>
                    <div class="login-button">
                        <button><a href="login.php">Entrar</a></button>
                    </div>
                </div>

                <div class="input-group" id="form"> 
                    <div class="input-box">
                        <label for="inputFormName">Nome</label>
                        <input id="nome" type="text" name="inputFormName" placeholder="Digite seu nome">
                    </div>

                    <div class="input-box">
                        <label for="inputFormLastName">Sobrenome</label>
                        <input id="sobrenome" type="text" name="inputFormLastName" placeholder="Digite seu sobrenome">
                    </div>
                    <div class="input-box">
                        <label for="inputFormEmail">E-mail</label>
                        <input id="email" type="email" name="inputFormEmail" placeholder="Digite seu e-mail">
                    </div>

                    <div class="input-box">
                        <label for="inputFormBirthday">Data de Nascimento</label>
                        <input id="nascimento" type="text" class="date-mask" name="inputFormBirthday" placeholder="dd/mm/yyyy">
                    </div>

                    <div class="input-box">
                        <label for="inputFormPassword">Senha</label>
                        <input id="senha" type="password" name="inputFormPassword" placeholder="Digite sua senha">
                    </div>

                    <div class="input-box">
                        <label for="inputFormCPassword">Confirme sua Senha</label>
                        <input id="csenha" type="password" name="inputFormCPassword" placeholder="Redigite sua senha">
                    </div>

                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="female" type="radio" name="gender" value="1">
                            <label for="inputRadioFemale">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input id="male" type="radio" name="gender" value="2">
                            <label for="inputRadioMale">Masculino</label>
                        </div>

                        <div class="gender-input">
                            <input id="others" type="radio" name="gender" value="3">
                            <label for="inputRadioOthers">Outros</label>
                        </div>

                        <div class="gender-input">
                            <input id="none" type="radio" name="gender" value="4">
                            <label for="inputRadioNone">Prefiro não dizer</label>
                        </div>
                    </div>
                </div>

                <div class="continue-button">
                    <button type="button" onclick="cadastrarUser()">Salvar</button>
                </div>
            </form>
        </div>

</div>

    <script type="text/javascript" src="js/funcoes.js"></script>
</body>
</html>