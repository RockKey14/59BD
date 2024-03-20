
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<title>Главная</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link rel="stylesheet" href="css/style_admin.css">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<style>
    .general-container {
        display: flex;
        flex-direction: column;
        width: 100%;
        margin-top: 25px;
    }

    .general-container input {
        padding: 8px 0 8px 10px;
        width: 100%;
        border-radius: 5px;
    }

    .general-container-update {
        margin-top: 0;
    }
    </style>
</head>
<?php
    include "components/admin_header.php";
    $DBmakes = mysqli_query($connection, "SELECT * FROM `Matches`");

    // добавление матча

?>


    
<body>
<main class="main">
        <div class="container">
            <div class="main-admin-block__h">
                <h1>Привет, <?php echo $_SESSION['user']['login'] ?></h1>
            </div>
            <div class="main-admin-block-a">
                <div class="main-admin-block__p">
                    <p> Воспользуйся следующими функциями:</p>
                </div>
                <div class="main-admin-block__a">
                 
                    
                </div>
            </div>
            <form action="../includes/addMatch.php" method="post" enctype="multipart/form-data">
            <div class="main-admin-block-inputs" id="add_Tovar">
                <div class="main-admin-block-inputs-block">
                    <div class="main-admin-block__p_h">
                        <p>Добавление матча</p>
                    </div>
                    <div style="color: #C14231; font-weight: bold;"><?php echo $_SESSION['errors']['img']; ?></div>
                </div>
                 <!-- Название игры -->
                <div class="main-admin-block-right">
                    <div class="main-admin-block__input-name">
                        <input type="text" placeholder="Название игры" name="game" required>
                    </div>
                    <!-- Дата матча -->
                    <div class="general-container">
                        <input type="date" name="date" id="date" placeholder="Дата" required>
                    </div>
                    <!-- Название первой команды -->
                    <div class="general-container">
                        <input type="text" name="First_team" id="First_team" placeholder="Название первой команды" required>
                    </div>
                    <!-- Логотип команды -->
                    <div class="general-container">
                        <input type="file" name="First_team_img" id="First_team_img"  required>
                    </div>
                    <!-- Название первой команды -->
                    <div class="general-container">
                        <input type="text" name="Second_team" id="Second_team" placeholder="Название первой команды" required>
                    </div>
                    <!-- Логотип команды -->
                    <div class="general-container">
                        <input type="file" name="Second_team_img" id="Second_team_img"  required>
                    </div>
                    <div class="main-admin-block-right-addTovar">
                        <button class="btn-title" id="addMatch" name="addMatch">Добавить матч</button>
                    </div>
                </div>
            </div>
        </form>
       

        </div>
    </main>
</body>
</html>