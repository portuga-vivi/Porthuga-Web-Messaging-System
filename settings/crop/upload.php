<?php
session_start();
$count = $_SESSION['count'];
$usuario = $_SESSION['usuario'];
$img_r = imagecreatefromjpeg($_FILES['img']['tmp_name']);

$X = $_GET['x'] * ($_GET['Wo']/$_GET['Wi']);
$W = $_GET['w'] * ($_GET['Wo']/$_GET['Wi']);
$Y = $_GET['y'] * ($_GET['Ho']/$_GET['Hi']);
$H = $_GET['h'] * ($_GET['Ho']/$_GET['Hi']);
$dst_r = ImageCreateTrueColor($W, $H);
imagesavealpha($dst_r, true);
$pasta = 'imagens/';
$pasta2 = '../../conexaoPHP/uploads/';
$img = $_FILES['img']['name'];
$img2 = $count . $img;
$img_final = $pasta . $img2;
$img_usuario = $pasta2 . $usuario;

$count2 = $count - 1;
imagecopyresampled($dst_r, $img_r, 0, 0, $X, $Y, $W, $H, $W,$H);


if(!imagejpeg($dst_r, $img_final, 80)){
    die("Erro ao salvar sua imagem!");
}else{
    echo "Veja a sua imagem como ficou.";
    echo "<br><img src='$img_final'>";

    imagejpeg($dst_r, $img_usuario, 80);

    $conexao = mysqli_connect('localhost', 'root', '', 'login') or die ('Não foi possível conectar!');

    $query = "UPDATE usuario SET pic = '1' WHERE username = '$usuario' ";
    mysqli_query($conexao, $query);

    if($count > 0){
        unlink($pasta . $count2 . $img);
    }


    $count++;
    $_SESSION['count'] = $count;

}

