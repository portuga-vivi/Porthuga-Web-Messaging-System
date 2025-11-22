<?php
session_start();
    include ('conexao.php');

    if(empty($_POST['usuario']) or empty($_POST['senha'])){
        $_SESSION['campo_vazio'] = true;
        header('Location: index.php');
        exit();
    }

    $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
    $senha = mysqli_real_escape_string($conexao ,$_POST['senha']);

    $query = "select id, first_name, username, email from usuario where (username = '{$usuario}' or email = '{$usuario}') and pass = md5('{$senha}')";

    //echo $query;exit();

    $result = mysqli_query($conexao, $query);

    $consulta = mysqli_fetch_array($result);

    $name = $consulta[1];
    $user = $consulta[2];

    $row = mysqli_num_rows($result);

    //echo $row; exit();

if($row == 1){

        $_SESSION['usuario'] = $user;
        $_SESSION['name'] = $name;
        header('Location: ../index.php');
}else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
}

