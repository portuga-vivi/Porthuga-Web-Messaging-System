<?php
/*
    define('HOST', 'porthuga.com');
    define('USUARIO', 'Portuga');
    define('SENHA', 'pORTHUGA2022');
    define('DB', 'login'); */

define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'login');
    $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar!');
