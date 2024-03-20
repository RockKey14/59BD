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
</head>
<header class="main-header">
    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container clearfix">

            <div class="top-left clearfix">
                <ul class="info-list">
                    <li>Добро пожаловать!</li>
                </ul>
            </div>

            <div class="top-right">
                <ul class="social-icons">
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="inner-container">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo-outer">
                    <div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title="Gamon - Digital Gaming and Esports HTML Template"></a></div>
                </div>

                <!--Nav Box-->
                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>

                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix pull-left">
                                <li class="current dropdown"><a href="index.html">Главная</a>
                                    
                                </li>
                                <li class="dropdown"><a href="about-clan.html">League</a>
                                   
                                </li>
                                <li><a href="gallery.html">Галерея</a></li>
                            </ul>

                            <ul class="navigation pull-right clearfix">
                                <li class="dropdown"><a href="matches.html">Матчи</a>
                                   
                            
                                <li><a href="#">Вход</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="index.html" title=""><img src="images/logo.png" alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->
            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-close"></span></div>
        
        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->
</header>
<body>
    <main>
        <form action="../includes/reg.php" method="post">
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
                        <button type="submit" name="register" value="register">Зарегистрироваться</button>
                    </div>
                   
                </div>
            </div>
        </form>
    </main>
</body>
</html>