<?php
   require "../includes/config.php";
    if($_POST['register']){
        $login = $_POST ['login'];
        $password = $_POST ['password'];
        
        
       
        $count=mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login'");

    }

    if (mysqli_num_rows($count) == 0) {
        header('Refresh: 2; URL=http://GAMON/index.php');
    echo 'Вы успешно зарегестрированы!';
        mysqli_query($connection, "INSERT INTO `users` ( `login`, `password`) VALUES ('{$login}', '{$password}')"); 
    }
    else {
        echo 'Ваша почта уже зарегестрирована!';
    }
        // var_dump($email);s
      
?>