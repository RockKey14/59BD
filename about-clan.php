<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>League</title>
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

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"><div class="icon"></div></div>

    <!-- Main Header -->
    <?php
    include "components/header.php";
	?>
    <!-- End Main Header -->

	<!--Page Title-->
    <section class="page-banner" style="background-image:url(images/background/title-bg.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Главное</a></li>
                    <li>Матчи</li>
                </ul>
                <h1>League</h1>
            </div>
        </div>
    </section>
    <!--End Page Title-->

	<!-- About Section -->
	<section class="about-section">
		<div class="auto-container">
			<!-- Images Gallery -->
			<div class="images-gallery">
				<div class="row clearfix">
					<!-- Column -->
					<div class="column col-lg-4 col-md-6 col-sm-12">
						<div class="image wow fadeInLeft" data-wow-delay="0ms">
							<img src="images/resource/about-1.jpg" alt="" />
						</div>
					</div>
					<!-- Column -->
					<div class="column col-lg-3 col-md-6 col-sm-12">
						<div class="image wow fadeInLeft" data-wow-delay="300ms">
							<img src="images/resource/about-2.jpg" alt="" />
						</div>
					</div>
					<!-- Column -->
					<div class="column col-lg-5 col-md-6 col-sm-12">
						<div class="image wow fadeInLeft" data-wow-delay="600ms">
							<img src="images/resource/about-3.jpg" alt="" />
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Lower Content -->
			<div class="lower-content">
				<div class="row clearfix">
					
					<!-- Column -->
					<div class="column col-lg-4 col-md-12 col-sm-12">
						<h3>Первая онлайн-лига в России</h3>
					</div>
					
					<!-- Column -->
					<div class="column col-lg-4 col-md-12 col-sm-12">
						<p>Не придумал ещё какой-то текст о своей лиге, но к диплому обязательно напишу.</p>
					</div>
					
					<!-- Column -->
					<div class="column col-lg-4 col-md-12 col-sm-12">
						<p>Не придумал ещё какой-то текст о своей лиге, но к диплому обязательно напишу.</p>
					</div>
					
				</div>
			</div>
			
		</div>
	</section>
	<!-- End About Section -->
	
	<!--Sponsors Section-->
    <section class="sponsors-section dark-bg">
    	<div class="auto-container">
        	
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                </ul>
            </div>
            
        </div>
    </section>
    <!--End Sponsors Section-->
	
	<!-- Call To Action Section -->
	<section class="facts-section">
		<!-- Title Boxed -->
		<div class="title-boxed" style="background-image:url(images/background/5.jpg)">
			<div class="auto-container">
				<div class="content wow fadeInLeft" data-wow-delay="0ms">
					<h2>59 ЛИГА <br> МЫ можем много <br> Высокие фонды</h2>
					<a href="contact.php" class="theme-btn btn-style-one"><span class="btn-title">Посмотреть турниры</span></a>
				</div>
			</div>
		</div>
		<!-- End Title Boxed -->
		
		<!-- Lower Boxed -->
		<div class="lower-boxed">
			<div class="auto-container">
				<div class="row clearfix">
					
					<!-- Counter Column -->
					<div class="counter-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							
							<!-- Featured Block -->
							<div class="featured-block">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon flaticon-joystick"></span>
									</div>
									<h3>785,000</h3>
									<div class="text">Игр сыграно за 7 дней</div>
								</div>
							</div>
							
							<!-- Featured Block -->
							<div class="featured-block">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon flaticon-man"></span>
									</div>
									<h3>63,000</h3>
									<div class="text">Всего игроков</div>
								</div>
							</div>
							
						</div>
					</div>
					
					<!-- Testimonial Column -->
					<div class="testimonial-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column wow fadeInRight" data-wow-delay="0ms">
							
							<div class="single-item-carousel owl-carousel owl-theme">
								
								<!-- Testimonial Block -->
								<div class="testimonial-block">
									<div class="inner-box">
										<div class="quote-icon flaticon-quote-1"></div>
										<div class="text">Не придумал ещё какой-то текст о своей лиге, но к диплому обязательно напишу.</div>
										<div class="author">- Денис Jerway</div>
									</div>
								</div>
								
								<!-- Testimonial Block -->
								<div class="testimonial-block">
									<div class="inner-box">
										<div class="quote-icon flaticon-quote-1"></div>
										<div class="text">Не придумал ещё какой-то текст о своей лиге, но к диплому обязательно напишу.</div>
										<div class="author">- Яна Yan4ik</div>
									</div>
								</div>
								
								<!-- Testimonial Block -->
								<div class="testimonial-block">
									<div class="inner-box">
										<div class="quote-icon flaticon-quote-1"></div>
										<div class="text">Не придумал ещё какой-то текст о своей лиге, но к диплому обязательно напишу.</div>
										<div class="author">- Костя Kostbl4</div>
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
	</section>
	<!-- End Call To Action Section -->
	
	<!-- Players Section -->
	<section class="players-section style-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">59 League</div>
				<h2>Наши дисциплины</h2>
			</div>
			
			<div class="row clearfix">
				
				<!-- Player Block -->
				<div class="player-block col-lg-4 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0mss">
					<div class="inner-box hvr-bob">
						<div class="image">
							<a href="#"><img src="images/resource/player-1.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="#">Counter Strike</a></h3>
							<div class="level">75 турниров</div>
							<ul class="social-icons">
								<li><a href="#"><span class="fab fa-twitter"></span></a></li>
								<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
								<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
								<li><a href="#"><span class="fab fa-instagram"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<!-- Player Block -->
				<div class="player-block col-lg-4 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="300ms">
					<div class="inner-box hvr-bob">
						<div class="image">
							<a href="#"><img src="images/resource/player-2.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="#">DOTA2</a></h3>
							<div class="level">40 турниров</div>
							<ul class="social-icons">
								<li><a href="#"><span class="fab fa-twitter"></span></a></li>
								<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
								<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
								<li><a href="#"><span class="fab fa-instagram"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<!-- Player Block -->
				<div class="player-block col-lg-4 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="600ms">
					<div class="inner-box hvr-bob">
						<div class="image">
							<a href="#"><img src="images/resource/player-3.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="#">Minecraft</a></h3>
							<div class="level">90 турниров</div>
							<ul class="social-icons">
								<li><a href="#"><span class="fab fa-twitter"></span></a></li>
								<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
								<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
								<li><a href="#"><span class="fab fa-instagram"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Players Section -->
	
	<!-- Main Footer -->
    <?php
include "components/footer.php"
?>
	
</div>
<!--End pagewrapper-->

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/appear.js"></script>
<script src="js/wow.js"></script>
<script src="js/scrollbar.js"></script>
<script src="js/script.js"></script>

</body>
</html>