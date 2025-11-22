<!DOCTYPE html>
<html>

<?php session_start(); include_once ("redirect.php"); ?>
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
        a{
            font-size: 5px;
        }
    </style>


</head>

<body>
<section class="hero is-success is-fullheight">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-4 is-offset-4">
                <h3 class="title has-text-grey">Definições do Usuário</h3>



                <div class="box">
                    <form action="login.php" method="POST">

                        <div class="field">
                            <div class="control">
                                <a style="font-size: 18px;" href="senha.php" class="button is-block is-link is-large is-fullwidth">Mudar de Palavra passe</a><br>

                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <a style="font-size: 18px;" href="crop/index.php" class="button is-block is-link is-large is-fullwidth">Atualizar a foto de perfil</a><br>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <a style="font-size: 18px;" href="remover.php" class="button is-block is-link is-large is-fullwidth">Remover a foto de perfil</a><br>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <a style="font-size: 18px;" href="dados.php" class="button is-block is-link is-large is-fullwidth">Atualizar os Dados pessoais</a><br>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <a style="font-size: 18px;" href="../index.php" class="button is-block is-link is-large is-fullwidth">Voltar</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</body>

</html>


