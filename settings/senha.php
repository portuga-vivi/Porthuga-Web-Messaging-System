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
<?php
session_start();
include_once ("redirect.php");

if(isset($_POST['ok'])) {
    $pass0 = $_POST['senha0'];
    $pass1 = $_POST['senha1'];
    $pass2 = $_POST['senha2'];
    if (empty($_POST['senha0']) or empty($_POST['senha1']) or empty($_POST['senha2'])) {
        $_SESSION['campo_vazio'] = true;
    } else {

        $conexao = mysqli_connect('localhost', 'root', '', 'login') or die ('Não foi possível conectar!');


        $sql_senha = "select pass from usuario where username = '" . $_SESSION['usuario'] . "' and pass = md5('{$pass0}')";

        $result = mysqli_query($conexao, $sql_senha);

        $consulta = mysqli_fetch_array($result);

        $row = mysqli_num_rows($result);

                if($row == 1){
                    if ($pass1 == $pass2) {

                        $query_online = "UPDATE usuario SET pass = md5('{$pass1}') WHERE username = '" . $_SESSION['usuario'] . "' ";
                        mysqli_query($conexao, $query_online);

                        $_SESSION['senha_alterada'] = true;
                    } else {
                        $_SESSION['senhas_diferentes'] = true;
                    }
                }else{
                    $_SESSION['senha_antiga_nao'] =true;
                }


    }
}
?>
<body>
<section class="hero is-success is-fullheight">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-4 is-offset-4">
                <h3 class="title has-text-grey">Mudança de Palavra passe</h3>
                <h3 class="title has-text-grey">PORTUGA</h3>

                <?php



                if(isset($_SESSION['senhas_diferentes'])):
                    ?>

                    <div class="notification is-danger">
                        <p>As palavras passe não coincidem</p>
                    </div>
                <?php

                endif;
                unset($_SESSION['senhas_diferentes']);
                ?>


                <?php
                if(isset($_SESSION['campo_vazio'])):
                    ?>
                    <div class="notification is-danger"><p>PREENCHA TODOS OS CAMPOS!</p></div><br>
                <?php
                endif;
                unset($_SESSION['campo_vazio']);
                ?>

                <?php
                if(isset($_SESSION['senha_antiga_nao'])):
                    ?>
                    <div class="notification is-danger"><p>Senha antiga inválida!</p></div><br>
                <?php
                endif;
                unset($_SESSION['senha_antiga_nao']);
                ?>


                <?php
                $fechar = false;
                if(isset($_SESSION['senha_alterada'])):
                    $fechar = true;
                    ?>
                    <div style="background-color: #1ca64c;" class="notification is-danger"><p>Password Alterado com sucesso!</p></div><br>
                    <a href="index.php" type="submit" name="ok" class="button is-block is-link is-large is-fullwidth">Voltar</a>
                <?php
                endif;
                unset($_SESSION['senha_alterada']);

                ?>
                <div style="<?php if($fechar){ ?> display: none; <?php } $fechar = false; ?>" class="box">
                    <form action="" method="POST">
                        <div class="field">
                            <div class="control">
                                <input name="senha0" class="input is-large" type="password" placeholder="Sua senha antiga">
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <input name="senha1" class="input is-large" type="password" placeholder="Sua nova senha">
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <input name="senha2" class="input is-large" type="password" placeholder="Repintroduza a nova senha">
                            </div>
                        </div>
                        <button type="submit" name="ok" class="button is-block is-link is-large is-fullwidth">Atualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


</body>

</html>


