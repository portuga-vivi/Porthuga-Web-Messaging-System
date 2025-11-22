<?php
session_start();
include_once ("redirect.php");
$usuario = $_SESSION['usuario'];
$pasta2 = '../conexaoPHP/uploads/';
$conexao = mysqli_connect('localhost', 'root', '', 'login') or die ('Não foi possível conectar!');

$query = "UPDATE usuario SET pic = '0' WHERE username = '$usuario' ";


if(unlink($pasta2 . $usuario)) {
    mysqli_query($conexao, $query);
    header("Location: ../index.php");

}

