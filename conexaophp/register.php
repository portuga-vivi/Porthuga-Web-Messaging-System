<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login - PHP + MySQL - Canal TI</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <style>
        body{
            background-color: #000016;
        }

        a.registro:hover{
            color: black;
            text-decoration: underline;
        }



        input::-webkit-input-placeholder{
            color:#C4C;
            background-color: #f5d383;
            text-transform: uppercase;
        }
        input::-moz-placeholder {
            color:#C4C;
            background-color: #f5d383;
            text-transform: uppercase;
        }
    </style>


</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Registo</h3>
                    <h3 class="title has-text-grey">PORTUGA</h3>


                    <div class="box">
                        <form method="post" action="register_login.php" enctype="multipart/form-data">

                            <?php
                            session_start();
                            if(isset($_SESSION['campo_vazio'])):
                                ?>
                                <div class="notification is-danger"><p>PREENCHA TODOS OS CAMPOS!</p></div><br>
                            <?php
                            endif;
                            unset($_SESSION['campo_vazio']);
                            ?>

                            <?php
                            if(isset($_SESSION['senha_desigual'])):
                                ?>
                                <div class="notification is-danger"><p>As Palavras passe não conscidem!</p></div><br>
                            <?php
                            endif;
                            unset($_SESSION['senha_desigual']);
                            ?>

                            <?php
                            if(isset($_SESSION['uploaded'])):
                                ?>

                                <div style="background-color: #1ca64c;" class="notification is-danger">
                                    <p>Imagem Carregada com Sucesso!</p>
                                </div>
                            <?php
                            endif;
                            unset($_SESSION['uploaded']);
                            ?>

                            <?php
                            if(isset($_SESSION['registado'])):
                                ?>

                                <div style="background-color: #1ca64c;" class="notification is-danger">
                                    <p>Registado com Sucesso!</p>
                                </div>
                                <a href="index.php" class="registro" style="color: #0b7cac; font: bold 15px Arial;">Login</a><br><br>
                            <?php
                                unset($_SESSION['first_name']);
                                unset($_SESSION['last_name']);
                                unset($_SESSION['email']);
                                unset($_SESSION['usuario']);
                                unset($_SESSION['pass']);
                                unset($_SESSION['pass2']);
                                unset($_SESSION['fileToUpload']);
                            endif;
                            unset($_SESSION['registado']);

                            ?>


                            <?php
                            if(isset($_SESSION['usuario_ocupado'])):
                                ?>
                                <div class="notification is-danger"><p>O nome do Usuário já está em uso!</p></div><br>
                            <?php
                            endif;
                            unset($_SESSION['usuario_ocupado']);
                            ?>

                            <?php
                            if(isset($_SESSION['email_ocupado'])):
                                ?>
                                <div class="notification is-danger"><p>O Email já está em uso!</p></div><br>
                            <?php
                            endif;
                            unset($_SESSION['email_ocupado']);
                            ?>

                            <?php
                            if(isset($_SESSION['imagem_nao'])):
                                ?>
                            <div class="notification is-danger">
                                <p>O arquivo selecionado, não é uma imagem válida!</p></div><br>
                            <?php
                            endif;
                            unset($_SESSION['imagem_nao']);
                            ?>


                            <?php
                            if(isset($_SESSION['file_nao'])):
                                ?>
                                <div class="notification is-danger">
                                    <p>Desculpe, Já existe uma foto com esse nome</p></div><br>
                            <?php
                            endif;
                            unset($_SESSION['file_nao']);
                            ?>


                            <?php
                            if(isset($_SESSION['file_large'])):
                                ?>
                                <div class="notification is-danger">
                                    <p>Foto muito grande! Selecione uma foto de 1MB no máximo</p></div><br>
                            <?php
                            endif;
                            unset($_SESSION['file_large']);
                            ?>


                            <?php
                            if(isset($_SESSION['formato_nao'])):
                                ?>
                                <div class="notification is-danger">
                                    <p>Formato não suportado, Apenas JPG, JPEG, PNG e GIF!</p></div><br>
                            <?php
                            endif;
                            unset($_SESSION['formato_nao']);
                            ?>


                            <?php
                            if(isset($_SESSION['general_error'])):
                                ?>
                                <div class="notification is-danger">
                                    <p>Algum erro occoreu durante o registo</p></div><br>
                            <?php
                            endif;
                            unset($_SESSION['general_error']);
                            ?>



                            <div class="field">
                                <div class="control">
                                    <input value="<?php if(isset($_SESSION['first_name'])){echo $_SESSION['first_name']; unset($_SESSION['first_name']);} ?>"  id="first_name" name = "first_name" type="text" class="input is-large" placeholder="Seu primeiro nome" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input value="<?php if(isset($_SESSION['last_name'])){echo $_SESSION['last_name']; unset($_SESSION['last_name']);} ?>"  id="last_name" name = "last_name" type="text" class="input is-large" placeholder="Seu Apelido" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email']; unset($_SESSION['email']);} ?>"  id="email" name = "email" type="email" class="input is-large" placeholder="Seu Email" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input value="<?php if(isset($_SESSION['usuario'])){echo $_SESSION['usuario']; unset($_SESSION['usuario']);} ?>"  id="usuario" name = "usuario" type="text" class="input is-large" placeholder="Escolha um Usuário" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input value="<?php if(isset($_SESSION['pass'])){echo $_SESSION['pass']; unset($_SESSION['pass']);} ?>" id="pass" name = "pass" type="password" class="input is-large" placeholder="Sua Palavra-passe" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input value="<?php if(isset($_SESSION['pass2'])){echo $_SESSION['pass2']; unset($_SESSION['pass2']);} ?>" id="pass2" name = "pass2" type="password" class="input is-large" placeholder="Reintroduza a Palavra-passe" autofocus="">
                                </div>
                            </div>

                            <button type="submit" name="submit" class="button is-block is-link is-large is-fullwidth">Registar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>


