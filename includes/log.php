<?php
   include "config.php";

   if(isset($_SESSION['user'])){
    header('location: ../admin_panel.php');
   }

    if(isset($_POST['register'])){
        $login = $_POST['login'];
        $password = $_POST['password'];
        
        $count= $connection -> query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
        }
        if ($count -> num_rows != 0) {
            $user = $count -> fetch_assoc();

            $_SESSION['user']['id'] = $user['id'];
            $_SESSION['user']['login'] = $user['login'];
            header('location: ../admin_panel.php');
        }
        else {
            $_SESSION['error']['log'] = "Неверный логин или пароль!";
            header('Refresh: 2; URL=http://gamon/index.php');
        }
?>