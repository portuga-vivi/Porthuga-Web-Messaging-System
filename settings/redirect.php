<?php
if (isset($_SESSION['usuario'])) {
    $uso = $_SESSION['usuario'];
} else {
    header('Location: ../conexaoPHP/index.php');
    $_SESSION['chat'] = true;


}