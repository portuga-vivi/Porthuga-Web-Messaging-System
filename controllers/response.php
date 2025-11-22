<?php
session_start();
include ("../chat/conexao.php");

$uso = $_SESSION['usuario'];
$usuario2 = $_SESSION['usuario2'];

if(!empty($_POST['mensagem'])){
    if($usuario2 != 'nada'){
        $hora = date("H:i");
        $data = date("Y-m-d");
        $mensagem = $_POST['mensagem'];
        $sql = $pdo->query("INSERT INTO $uso SET username= '$usuario2', content= '$mensagem', status = 0, views = 0, som_mensagem=0, hora ='$hora', date = '$data'");
        $sql = $pdo->query("INSERT INTO $usuario2 SET username= '$uso', content= '$mensagem', status = 1, views = 1, som_mensagem=1, hora ='$hora', date = '$data'");

   $_SESSION['gravados'] = 1;
    }}

?>