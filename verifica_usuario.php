<?php
if(!isset($_SESSION))	session_start();
include('inc/config.php');

        include "inc/config.php";

        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $qry = "SELECT * FROM pacientes WHERE login='".$login."' AND senha='".$senha."'";

        $sql =  mysql_query($qry) or print_r(mysql_error());
        $login_check = mysql_num_rows($sql);
        if(!isset($_SESSION))	session_start();

        if ($login_check > 0){
          $row = mysql_fetch_array($sql);

            $_SESSION['id'] = $row['id'];
            $_SESSION['nome'] = $row['nome'];
            $_SESSION['login'] = $row['login'];

          header("Location: index.php");


        }else{

          echo "Você não pode logar-se! Este usuário e/ou senha não são válidos!<br />
          Por favor tente novamente!<br />";

          include "index.html";

        }
        ?>
