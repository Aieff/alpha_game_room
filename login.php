<?php 
include_once "layout/head-login.php";
include_once "configuracoes.php";
?>

<body>
    <div class="container">

        <div class="form-image">
            <img src="image/bg-login.png">
        </div>
        <div class="form">
            <form>
                <div class="form-header">
                    <div class="title">
                    <img src="image/logo.png">
                        <h1>ARE YOU READY <span>?</span></h1>
                    </div>
                </div>

                    <div class="input-group">
                        <div class="input-box">
                            <label for="loginEmail">E-mail</label>
                            <input id="email" type="text" name="loginEmail" placeholder="E-mail">
                        </div>

                        <div class="input-box">
                            <label for="loginPassword">Senha</label>
                            <input id="senha" type="password" name="loginPassword" placeholder="Password">
                        </div>
                
                    </div>

                    <div class="continue-button">
                        <button class="enter" type="button" onclick="inciarSessao()">Entrar</button>
                        <button><a href="formulario.php">Cadastrar</a></button>
                    </div>
            </form>
        </div>

</div>

    <script type="text/javascript" src="js/funcoes.js"></script>
</body>
</html>