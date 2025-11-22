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
            text-transform: uppercase;
        }
        input::-moz-placeholder {
            color:#C4C;
            text-transform: uppercase;
        }

        #esconder, #esconder2{
            display: none;
        }
        td{
            padding-right: 40px;
            padding-bottom: 5px;
        }
    </style>
    <?php
    session_start();
    include_once ("redirect.php");
    $usuario = $_SESSION['usuario'];
    $conexao = mysqli_connect('localhost', 'root', '', 'login') or die ('Não foi possível conectar!');

    if(isset($_POST['ok'])) {
       /* if(empty($_POST['first_name']) and empty($_POST['last_name']) and empty($_POST['sexo']) and empty($_POST['contacto']) and
            empty($_POST['data_nascimento']) and empty($_POST['nacionalidade']) and empty($_POST['nacionalidade_outro']) and
            empty($_POST['cidade']) and empty($_POST['cidade_outro']) and empty($_POST['sobre'])){
            $_SESSION['campo_vazio'] = true;
        }else{*/
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $sexo = isset($_POST['sexo'])?$_POST['sexo']:"NULL";
        $contacto = $_POST['contacto'];
        $data_nascimento = $_POST['data_nascimento'];
        $nacionalidade = isset($_POST['nacionalidade'])?$_POST['nacionalidade']:"NULL";
        $nacionalidade_outro = $_POST['nacionalidade_outro'];
        $cidade = isset($_POST['cidade'])?$_POST['cidade']:"NULL";
        $cidade_outro = $_POST['cidade_outro'];
        $sobre = $_POST['sobre'];



        $query_first = "UPDATE usuario SET first_name = '{$first_name}' WHERE username = '$usuario' ";
        $query_last = "UPDATE usuario SET last_name = '{$last_name}' WHERE username = '$usuario' ";
        $query_sexo = "UPDATE usuario SET sexo = '{$sexo}' WHERE username = '$usuario' ";
        $query_contacto = "UPDATE usuario SET contacto = '{$contacto}' WHERE username = '$usuario' ";
        $query_data = "UPDATE usuario SET data_nascimento = '{$data_nascimento}' WHERE username = '$usuario' ";
        $query_nacional = "UPDATE usuario SET nacionalidade = '{$nacionalidade}' WHERE username = '$usuario' ";
        $query_nacional_outro = "UPDATE usuario SET nacionalidade_outro = '{$nacionalidade_outro}' WHERE username = '$usuario' ";
        $query_cidade = "UPDATE usuario SET cidade = '{$cidade}' WHERE username = '$usuario' ";
        $query_cidade_outro = "UPDATE usuario SET cidade_outro = '{$cidade_outro}' WHERE username = '$usuario' ";
        $query_Sobre = "UPDATE usuario SET sobre = '{$sobre}' WHERE username = '$usuario' ";

       if( mysqli_query($conexao, $query_first) and
        mysqli_query($conexao, $query_last) and
        mysqli_query($conexao, $query_sexo) and
        mysqli_query($conexao, $query_contacto) and
        mysqli_query($conexao, $query_data) and
        mysqli_query($conexao, $query_nacional) and
        mysqli_query($conexao, $query_nacional_outro) and
        mysqli_query($conexao, $query_cidade) and
        mysqli_query($conexao, $query_cidade_outro) and
        mysqli_query($conexao, $query_Sobre) ){
           $_SESSION['atualizado'] = true;
       }else{
           $_SESSION['nao_atualizado'] = true;
       }



    }

    ?>

</head>




<body>
<section class="hero is-success is-fullheight">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-4 is-offset-4">
                <h3 class="title has-text-grey">Dados pessoais</h3>



                <?php
                $sql = "select * from usuario where username = '$usuario'";

                $result = mysqli_query($conexao, $sql);

                $consulta = mysqli_fetch_array($result);

                $row = mysqli_num_rows($result);

                ?>


                <div class="box">
                    <form action="" method="POST">


                        <?php
                        if(isset($_SESSION['atualizado'])):
                            ?>

                            <div style="background-color: #1ca64c;" class="notification is-danger">
                                <p>Dados atualizados com sucesso!</p>
                            </div>
                            <a href="index.php" class="button is-block is-link is-large is-fullwidth">Voltar</a>
                        <?php
                        endif; ?>



                        <?php
                        if(isset($_SESSION['nao_atualizado'])):
                            ?>

                            <div class="notification is-danger">
                                <p>Algum erro ocorido...!</p>
                            </div>
                        <?php
                        endif;

                        unset($_SESSION['nao_atualizado']);

                        ?>
                        <div style="display: <?php if(isset($_SESSION['atualizado'])){?> none; <?php } ?>">
                        <div class="field">
                            <div class="control">
                                <label for="first_name">Usuário</label>
                                <input value="<?php echo $consulta['username']; ?>" readonly  type="text" class="input is-large" autofocus="">
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <label for="last_name">Seu Apelido</label>
                                <input value="<?php echo $consulta['email']; ?>" readonly type="text" class="input is-large" autofocus="">
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <label for="first_name">Seu primeiro nome</label>
                                <input value="<?php echo $consulta['first_name']; ?>" id="first_name" name="first_name" type="text" class="input is-large" autofocus="">
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <label for="last_name">Seu Apelido</label>
                                <input value="<?php echo $consulta['last_name']; ?>" id="last_name" name="last_name" type="text" class="input is-large" autofocus="">
                            </div>
                        </div>

                        <div class="field">

                            <div id="sexo" class="control">

                                <label>Sexo</label><br><br>
                                <label for="sexo"><strong>Masculino</strong></label>
                                <input style="margin-right: 30px;" <?php if($consulta['sexo'] == "Masculino"){?> checked <?php } ?> id="masculino" name="sexo" type="radio" value="Masculino"  autofocus="">

                                <label for="feminino"><strong>Feminino</strong></label>
                                <input <?php if($consulta['sexo'] == "Feminino"){?> checked <?php } ?> id="feminino" name="sexo" type="radio" value="Feminino"  autofocus="">
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <label for="contacto">Seu contacto</label>
                                <input id="contacto" value="<?php echo $consulta['contacto']; ?>" name="contacto" type="text" class="input is-large" autofocus="">
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <label for="data_nascimento">Data de nascimento</label>
                                <input id="data_nascimento" value="<?php echo $consulta['data_nascimento']; ?>" name="data_nascimento" type="date" class="input is-large" autofocus="">
                            </div>
                        </div>

                        <div class="field">

                            <div class="control">

                                <label>Nacionalidade</label><br><br>
                                <label for="moz"><strong>Moçambicano</strong></label>
                                <input style="margin-right: 30px;" <?php if($consulta['nacionalidade'] == "Moçambicano"){?> checked <?php } ?> id="moz" onclick="mostrar(1);" name="nacionalidade" type="radio" value="Moçambicano"  autofocus="">

                                <label for="outro"><strong>Outro</strong></label>
                                <input <?php if($consulta['nacionalidade'] == "Outro"){?> checked <?php } ?> id="outro" onclick="mostrar(2);" name="nacionalidade" type="radio" value="Outro"  autofocus="">
                            </div>
                        </div>

                        <div id="esconder" class="field">
                            <div class="control">
                                <label for="nacionalidade_outro">Outra Nacionalidade Especifique</label>
                                <input id="nacionalidade_outro" value="<?php echo $consulta['nacionalidade_outro']; ?>" name="nacionalidade_outro" type="text" class="input is-large" autofocus="">
                            </div>
                        </div>

                        <div class="field">

                            <div class="control">

                            <label>Qual a sua cidade?</label><br><br>
                                <table>   <td><label for="maputo"><strong>Maputo</strong></label></td>
                                    <td><input style="margin-right: 30px;" <?php if($consulta['cidade'] == "Maputo"){?> checked <?php } ?> id="maputo" onclick="mostrar2(1);" name="cidade" type="radio" value="Maputo"  autofocus=""></td></tr>

                                    <td><label for="beira"><strong>Beira</strong></label></td>
                                    <td><input style="margin-right: 30px;" <?php if($consulta['cidade'] == "Beira"){?> checked <?php } ?> id="beira" onclick="mostrar2(1);" name="cidade" type="radio" value="Beira"  autofocus=""></td></tr>

                                    <td><label for="Nampula"><strong>Nampula</strong></label></td>
                                    <td><input style="margin-right: 30px;" <?php if($consulta['cidade'] == "Nampula"){?> checked <?php } ?> id="Nampula" onclick="mostrar2(1);" name="cidade" type="radio" value="Nampula"  autofocus=""></td></tr>

                                    <td><label for="Pemba"><strong>Pemba</strong></label></td>
                                    <td><input style="margin-right: 30px;" <?php if($consulta['cidade'] == "Pemba"){?> checked <?php } ?> id="Pemba" onclick="mostrar2(1);" name="cidade" type="radio" value="Pemba"  autofocus=""></td></tr>

                                    <td><label for="Lichinga"><strong>Lichinga</strong></label></td>
                                    <td><input style="margin-right: 30px;" <?php if($consulta['cidade'] == "Lichinga"){?> checked <?php } ?> id="Lichinga" onclick="mostrar2(1);" name="cidade" type="radio" value="Lichinga"  autofocus=""></td></tr>

                                    <td><label for="Quelimane"><strong>Quelimane</strong></label></td>
                                    <td><input style="margin-right: 30px;" <?php if($consulta['cidade'] == "Quelimane"){?> checked <?php } ?> id="Quelimane" onclick="mostrar2(1);" name="cidade" type="radio" value="Quelimane"  autofocus=""></td></tr>

                                    <td><label for="Mocuba"><strong>Mocuba</strong></label></td>
                                    <td><input style="margin-right: 30px;" <?php if($consulta['cidade'] == "Mocuba"){?> checked <?php } ?> id="Mocuba" onclick="mostrar2(1);" name="cidade" type="radio" value="Mocuba"  autofocus=""></td></tr>

                                    <td> <label for="Chimoio"><strong>Chimoio</strong></label></td>
                                    <td><input style="margin-right: 30px;" <?php if($consulta['cidade'] == "Chimoio"){?> checked <?php } ?> id="Chimoio" onclick="mostrar2(1);" name="cidade" type="radio" value="Chimoio"  autofocus=""></td></tr>

                                    <td><label for="Inhambane"><strong>Inhambane</strong></label></td>
                                    <td><input style="margin-right: 30px;" <?php if($consulta['cidade'] == "Inhambane"){?> checked <?php } ?> id="Inhambane" onclick="mostrar2(1);" name="cidade" type="radio" value="Inhambane"  autofocus=""></td></tr>

                                    <td> <label for="Xai"><strong>Xai-xai</strong></label></td>
                                    <td> <input style="margin-right: 30px;" <?php if($consulta['cidade'] == "Xai-xai"){?> checked <?php } ?> id="Xai" onclick="mostrar2(1);" name="cidade" type="radio" value="Xai-Xai"  autofocus=""></td></tr>

                                    <td> <label for="Nacala"><strong>Nacala</strong></label></td>
                                    <td> <input style="margin-right: 30px;" <?php if($consulta['cidade'] == "Nacala"){?> checked <?php } ?> id="Nacala" onclick="mostrar2(1);" name="cidade" type="radio" value="Nacala"  autofocus=""></td></tr>

                                    <td> <label for="Matola"><strong>Matola</strong></label></td>
                                    <td> <input style="margin-right: 30px;" <?php if($consulta['cidade'] == "Matola"){?> checked <?php } ?> id="Matola" onclick="mostrar2(1);" name="cidade" type="radio" value="Matola"  autofocus=""></td></tr>

                                    <td><label for="outro"><strong>Outro</strong></label></td>
                                    <td> <input id="outro" <?php if($consulta['cidade'] == "Outro"){?> checked <?php } ?> onclick="mostrar2(2);" name="cidade" type="radio" value="Outro"  autofocus=""></td></tr>
                            </table>
                            </div>
                        </div>

                        <div id="esconder2" class="field">
                            <div class="control">
                                <label for="cidade_outro">Outra cidade Especifique</label>
                                <input id="cidade_outro" value="<?php echo $consulta['cidade_outro']; ?>" name="cidade_outro" type="text" class="input is-large" autofocus="">
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <label for="contacto">Conte um pouco sobre você</label>
                                <textarea style="height: 100px;" id="sobre"  name="sobre" type="text" class="input is-large" autofocus=""><?php echo $consulta['sobre']; ?></textarea>
                            </div>
                        </div>

                        <button name="ok" type="submit" class="button is-block is-link is-large is-fullwidth">Actualizar</button>
                        </div>
                    </form>
                    <?php
                    unset($_SESSION['atualizado']);

                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
</body>

<script>
    function mostrar(s){
        if(s == 1){

           document.getElementById("esconder").style.display = "none"
        }else if(s = 2){
           document.getElementById("esconder").style.display = "block"
        }
    }

    function mostrar2(s){
        if(s == 1){

            document.getElementById("esconder2").style.display = "none"
        }else if(s = 2){
            document.getElementById("esconder2").style.display = "block"
        }
    }
</script>
</html>


