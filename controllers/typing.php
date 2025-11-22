<?php
session_start();
$conexao = mysqli_connect('localhost', 'root', '', 'login') or die ('Não foi possível conectar!');
if(isset($_SESSION['usuario2'])) {


    $tempo = date('Y-m-d H:i:s');
    $tempo2 = strtotime($tempo);
    $tempo3 = date('H:i:s', $tempo2);


    $typing = 1;
    $query_username2 = "UPDATE usuario SET username2 = '" . $_SESSION['usuario2'] . "' WHERE username = '" . $_SESSION['usuario'] . "'";
    $query_typing = "UPDATE usuario SET typing = '$typing' WHERE username = '" . $_SESSION['usuario'] . "'";
    $query_tempo = "UPDATE usuario SET tempo_typing = '$tempo3' WHERE username = '" . $_SESSION['usuario'] . "'";

    mysqli_query($conexao, $query_username2);
    mysqli_query($conexao, $query_typing);
    mysqli_query($conexao, $query_tempo);
}
