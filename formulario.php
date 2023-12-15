<?php
include_once 'configuracoes.php';
include_once 'layout/head.php';
include_once 'layout/imports/links-formulario.php';
include_once 'layout/close-head.php';
?>

    <div class="container-default">

        <div class="form-image">
            <img src="image/bg-forms.png">
        </div>

        <div class="form">
            <form>

            <div class="form-header">
                    <div class="title">
                        <h1>ARE YOU READY <span>?</span></h1>
                    </div>
                    <div class="login-button">
                        <button><a href="login.php">Entrar</a></button>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group text-center">
                        <img src="avatar/avatar-placeholder.jpg" onclick="triggerClick()" id="profileDisplay"/>
                        <input type="file" name="profileImage" id="profileImage" onchange="displayImage(this)" class="form-control" style="display: none;">
                        <button type="button" class="btn btn-secondary button-default" data-bs-toggle="modal" data-bs-target="#avatarModal" style="border-radius: 50%;"><i class="fa-solid fa-user"></i></button>
                    </div>
                </div>

                <!-- Modal para o cropp.js-->
                <div class="modal fade" id="cropperModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header primary-bg">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body secundary-bg" style="display: flex; justify-content: center;">
                                <img id="cropperImage" src="" alt="Crop" style="max-width: 100%;">
                            </div>
                            <div class="modal-footer primary-bg">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="cropButton">Crop</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal de Avatares Padrão -->
                <div class="modal fade" id="avatarModal" tabindex="-1" aria-labelledby="avatarModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header primary-bg align-itens">
                            <h5 class="modal-title" id="avatarModalLabel">Avatares</h5>
                        </div>
                        <div class="modal-body secundary-bg">
                            <div class="row">
                            <!-- Primeira Fileira de Avatares -->
                            <div class="col-4">
                                <img src="avatar/batman-v1.png" class="avatar-icons" style="cursor: pointer;" onclick="selectAvatar('avatar/batman-v1.png')">
                            </div>
                            <div class="col-4">
                                <img src="avatar/kratos-v1.png" alt="Avatar 2" class="avatar-icons" style="cursor: pointer;" onclick="selectAvatar('avatar/kratos-v1.png')">
                            </div>
                            <div class="col-4">
                                <img src="avatar/spider-v1.png" alt="Avatar 3" class="avatar-icons" style="cursor: pointer;" onclick="selectAvatar('avatar/spider-v1.png')">
                            </div>
                            </div>
                            <div class="row mt-3">
                            <!-- Segunda Fileira de Avatares -->
                            <div class="col-4">
                                <img src="avatar/ellie.png" alt="Avatar 4" class="avatar-icons" style="cursor: pointer;" onclick="selectAvatar('avatar/ellie.png')">
                            </div>
                            <div class="col-4">
                                <img src="avatar/cyberpunk-female.png" alt="Avatar 5" class="avatar-icons" style="cursor: pointer;" onclick="selectAvatar('avatar/cyberpunk-female.png')">
                            </div>
                            <div class="col-4">
                                <img src="avatar/cyberpunk-male.png" alt="Avatar 6" class="avatar-icons" style="cursor: pointer;" onclick="selectAvatar('avatar/cyberpunk-male.png')">
                            </div>
                            </div>
                        </div>
                        <div class="modal-footer primary-bg">
                            <button type="button" class="btn btn-secondary button-default" data-bs-dismiss="modal">Fechar</button>
                        </div>
                        </div>
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

                <div class="continue-button">
                    <button type="button" onclick="cadastrarUser()">Salvar</button>
                </div>
            </form>
        </div>

    </div>


<script type="text/javascript" src="js/funcoes.js"></script>

<?php
include_once ('layout/footer.php');
?>