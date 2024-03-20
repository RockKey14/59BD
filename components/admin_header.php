<?php
    include './includes/config.php';
?>

<header class="main-header">
       
        <div class="header-top">
            <div class="auto-container clearfix">

                <div class="top-left clearfix">
                    <ul class="info-list">
                        <?php
                            if(!isset($_SESSION['user']['login'])){
                        ?>
                        <li>Добро пожаловать!</li>
                        <?php
                            }else{
                        ?>
                        <li>Добро пожаловать, <?php echo $_SESSION['user']['login'] ?>!</li>
                        <?php
                            }
                        ?>
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
                        <div class="logo"><a href="index.php"><img src="images/logo.png" alt="" title="Gamon - Digital Gaming and Esports HTML Template"></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix pull-left">
                                    <li class="current dropdown"><a href="index.php">Главная</a>
                                        
                                    </li>
									<li class="dropdown"><a href="about-clan.php">League</a>
                                       
                                    </li>
                                    <li><a href="gallery.php">Галерея</a></li>
                                </ul>

                                <ul class="navigation pull-right clearfix">
                                    <li class="dropdown"><a href="matches.php">Матчи</a></li>
                                       
                                    <?php
                            if(!isset($_SESSION['user']['login'])){
                        ?>
                        <li><a href="join.php">Вход</a></li>
                        <?php
                            }else{
                        ?>
                        <li><a href="logout.php">Выход</a></li>
                        <?php
                            }
                        ?>
                                    
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
                    <a href="index.php" title=""><img src="images/logo.png" alt="" title=""></a>
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