<?php
 require "../includes/config.php";


 // удаление матча
if(isset($_POST['delMatch'])) {
 
     unset($_SESSION['error']);
     $id = $_POST['delMatchID'];

        if(!isset($_SESSION['error'])){
            mysqli_query($connection, "DELETE FROM `Matches` WHERE `id` = '$id'"); 
            }
     }
    
     header('Refresh: 0; URL=http://GAMON/matches.php');

?>