
<?php
    session_start();

include ('conexao.php');

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$pp = $_POST['pass'];
$pp2 = $_POST['pass2'];
$pic = 0;
$online = 0;
$tempo = "00:00:00";

$_SESSION['first_name'] = $first_name;
$_SESSION['last_name'] = $last_name;
$_SESSION['email'] = $email;
$_SESSION['usuario'] = $usuario;
$_SESSION['pic'] = $pic;
$_SESSION['pass'] = $pp;
$_SESSION['pass2'] = $pp2;







if(empty($_POST['first_name']) or empty($_POST['last_name']) or empty($_POST['email'])
    or empty($_POST['usuario']) or empty($_POST['pass']) or empty($_POST['pass2'])){



    $_SESSION['campo_vazio'] = true;
    header('Location: register.php');
}else{
    if($_POST['pass'] != $_POST['pass2']){
        $_SESSION['senha_desigual'] = true;
        header('Location: register.php');
    }else{



        $sql_usuario = "select username from usuario where username = '{$usuario}'";
        $sql_email = "select email from usuario where email = '{$email}'";

        $CriarTabela = "create table if not exists usuario (
                            id int not null AUTO_INCREMENT PRIMARY KEY,
	                        first_name varchar (200) not null,
                            last_name varchar (100) not null,
                            email varchar (200) not null,
                            username varchar (200) not null,
                            pass varchar (200) not null,
                            pic int (1) not null,
                            online int (1) not null,
                            tempo varchar (8) not null,
                            username2 varchar(200) not null,
                            typing int (1) not null,
                            tempo_typing varchar (8) not null,
                            sexo varchar (10),
                            contacto varchar (15),
                            data_nascimento varchar (10),
                            nacionalidade varchar (100),
                            nacionalidade_outro varchar (200),
                            cidade varchar (100),
                            cidade_outro varchar (200),
                            sobre blob (1000000) 
                            );";


        mysqli_query($conexao, $CriarTabela);

        $filtro_usuario = mysqli_query($conexao, $sql_usuario);
        $filtro_email = mysqli_query($conexao, $sql_email);

        $registos_usuario = mysqli_num_rows($filtro_usuario);
        $registos_email = mysqli_num_rows($filtro_email);

        if($registos_usuario == 1){

            $_SESSION['usuario_ocupado'] = true;
            header('Location: register.php');

        }elseif ($registos_email == 1){
            $_SESSION['email_ocupado'] = true;
            header('Location: register.php');
        }else{


            $username2 = "nada";
            $typing = 0;
            $ligacao = "insert into usuario (first_name, last_name, email, username, pass, pic, online, tempo, username2, typing, tempo_typing) values ('{$first_name}','{$last_name}', '{$email}', '{$usuario}', md5('{$pp}'), '{$pic}', '{$online}', '{$tempo}', '{$username2}','{$typing}', '{$tempo}')";

            $tabela = "CREATE TABLE $usuario (
                         id int AUTO_INCREMENT not null PRIMARY KEY,
                         username varchar(100) not null,
                         content blob (1000000) not null,
	                     status int(1) not null,
	                     views int(1) not null,
	                     som_mensagem int(1) not null,
	                     hora varchar (5) not null,
	                     date varchar(10) not null)";

            mysqli_query($conexao, $tabela);


            if(mysqli_query($conexao, $ligacao))
            {
                $_SESSION['registado'] = true;
                header('Location: register.php');
            }
            else {
                    $_SESSION["general_error"] = true;
                   header('Location: register.php');

                }
            }


        }


    }



























