<?php

session_start();
$conexao = mysqli_connect('localhost', 'root', '', 'login') or die ('Não foi possível conectar!');
$usuario = $_SESSION['usuario'];
$query_online = "UPDATE usuario SET online = '0' WHERE username = '$usuario'";
mysqli_query($conexao, $query_online);

session_destroy();
header('Location: ../index.php');
exit();

