<?php
 
 require "../includes/config.php";
    // добавление матча
if(isset($_POST['addMatch'])) {
    
        unset($_SESSION['error']);
        $game = $_POST['game'];
        $date = $_POST['date'];
        $First_team = $_POST['First_team'];
        $First_team_img = $_POST['First_team_img'];
        $Second_team = $_POST['Second_team'];
        $Second_team_img = $_POST['Second_team_img'];
        $uploaddir = '../assets/img/';
        if ($_FILES['First_team_img'] != "") {
            $galleryImg = $_FILES ['First_team_img'];
            if ("image" == substr($galleryImg['type'], 0, 5)) {
                $First_team_img = uniqid()  . "." . substr($galleryImg['type'], 6);
                move_uploaded_file($galleryImg['tmp_name'], "../assets/img/" . $First_team_img);
                $_SESSION['success']['addImgGallery'] = "Добавлено!";
            }
        } else {
            $_SESSION['error']['chooseImg'] = "Выберите изображение!"; 
        }
        
    

        if ($_FILES['Second_team_img'] != "") {
            $galleryImg = $_FILES ['Second_team_img'];
            if ("image" == substr($galleryImg['type'], 0, 5)) {
                $Second_team_img = uniqid()  . "." . substr($galleryImg['type'], 6);
                move_uploaded_file($galleryImg['tmp_name'], "../assets/img/" . $Second_team_img);
                $_SESSION['success']['addImgGallery'] = "Добавлено!";
            }
        } else {
            $_SESSION['error']['chooseImg'] = "Выберите изображение!"; 
        }
    if(!isset($_SESSION['error'])){
        mysqli_query($connection, "INSERT INTO `Matches`(`game`, `date`, `First_team`, `First_team_img`, `Second_team`, `Second_team_img`)
        VALUES ('$game', '$date', '$First_team', '$First_team_img', '$Second_team', '$Second_team_img' )"); 

header('Refresh: 0; URL=http://GAMON/index.php');
    }
        
    }

        

?>