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
                    <h3 class="title has-text-grey">Sistema de Login</h3>
                    <h3 class="title has-text-grey">PORTUGA</h3>

                    <?php
                    session_start();
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>

                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php

                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>

                    <?php
                    if(isset($_SESSION['chat'])):
                        ?>

                        <div class="notification is-danger">
                            <p>FAÇA O LOGIN ANTES DO BATE PAPO</p>
                        </div>
                    <?php

                    endif;
                    unset($_SESSION['chat']);
                    ?>


                    <?php
                    if(isset($_SESSION['campo_vazio'])):
                    ?>
                    <div class="notification is-danger"><p>PREENCHA TODOS OS CAMPOS!</p></div><br>
                    <?php
                            endif;
                            unset($_SESSION['campo_vazio']);
                            ?>

                    <div class="box">
                        <form action="login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" type="text" class="input is-large" placeholder="Seu usuário ou email" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                        </form>

                        <br><br><a href="register.php" class="registro" style="color: #0b7cac; font: bold 15px Arial;">Registar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>


