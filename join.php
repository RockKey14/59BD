<DOCTYPE html>


<meta charset="utf-8">
<title>Вход</title>
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


<body>

<?php
    include "components/header.php";
?>

    <main>
        <form action="../includes/log.php" method="post">
            <div class="auto">
                <div class="auto-block">
                    <div class="auto-block__h">
                        <h3>Авторизация </h3>
                    </div>
                    <div class="auto-block__input-login">
                        <input type="login" name="login" placeholder="Логин">
                    </div>
                    <div class="auto-block__input-password">
                        <input type="password" name="password" placeholder="Пароль">
                    </div>
                    <div class="auto-block__button-enter">
                        <button type="submit" name="register" value="register">Войти</button>
                    </div>
                   
                </div>
            </div>
        </form>

        <form action="register.php" method="post">
            <div class="auto">
                <div class="auto-block">
                    <div class="auto-block__h">
                    <h3>Нету аккаунта?</h3>
                    </div>
        <div class="auto-block__button-cancel">
           
                        <button  id="autoreg" type="submit">Регистрация</button>
                    </div>
                    </div>
                </div>
                </form>
               
    </main>
</body>
</html>