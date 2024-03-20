<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Матчи</title>
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
	$matches = mysqli_query($connection, "SELECT * FROM `Matches`");
	?>
    <!-- End Main Header -->

    <!--Page Title-->
    <section class="page-banner" style="background-image:url(images/background/title-bg.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Главная</a></li>
                    <li>Maтчи</li>
                </ul>
                <h1>Maтчи</h1>
            </div>
        </div>
    </section>
    <!--End Page Title-->

	<!-- Matches Section -->
	<section class="matches-section">
		<div class="auto-container">

			<!-- Matches Info Tabs-->
			<div class="matches-info-tabs">
				<!-- Matches Tabs-->
				<div class="matches-tabs tabs-box">
				
					<!--Tab Btns-->
					<ul class="tab-btns tab-buttons clearfix">
						<li data-tab="#prod-all" class="tab-btn active-btn"><span>Все матчи</span></li>
						<li data-tab="#prod-matches" class="tab-btn"><span>Предстоящие матчи</span></li>
						<li data-tab="#prod-results" class="tab-btn"><span>Прошедшие матчи</span></li>
					</ul>
					
					<!--Tabs Container-->
					<div class="tabs-content">
						
						<!--Tab / Active Tab-->
						<div class="tab active-tab" id="prod-all">
							<div class="content">
							<?php 
                    if(!isset($_GET['more'])) {
                        while($row = mysqli_fetch_assoc($matches)) {
                    ?>
								<!-- Matches Block -->
								<div class="matches-block">
									<div class="inner-block">
										<div class="row clearfix">
											
											<!-- Content Column -->
					
				
											<div class="content-column col-lg-7 col-md-12 col-sm-12">
												<div class="inner-column">
													<ul class="tags">
													<form action="../includes/delMatch.php" method="post">
													<div class="main-admin-block-delete__button">
														<input name = "delMatchID" type ="hidden" value = "<?php echo $row ['id'] ?>">
														<?php
														if ($_SESSION['user']['login'] ) {?>
                <button   id="deleteTovar" name="delMatch" type="submit">Удалить матч</button>
														<?php }?>
            </div>
						</form>
													</ul>
													<div class="title">Watch Stream</div>
													<h2><a href="matches-single.html"><?php echo $row['game'] ?></a></h2>
													<div class="date"><?php echo $row['date'] ?></li>
												</div>
											</div>
											
											<!-- Match Column -->
											<div class="match-column col-lg-7 col-md-12 col-sm-12">
												<div class="inner-column">
													<div class="row clearfix">
														
														<!-- Match Item -->
														<div class="match-item col-lg-6 col-md-6 col-sm-12">
															<div class="inner-item">
																<div class="icon-box">
																	<img class="img-flex" src="./assets/img/<?php echo $row ['First_team_img'] ?>">
																</div>
																<a href="#" class="product"><?php echo $row ['First_team']; ?></a>
															</div>
														</div>
														
														<!-- Match Item -->
														<div class="match-item col-lg-6 col-md-6 col-sm-12">
															<div class="inner-item">
																<div class="icon-box">
																	<img class="img-flex" src="./assets/img/<?php echo $row['Second_team_img'] ?>">
																</div>
																<a href="#" class="product"><?php echo $row ['Second_team']; ?></a>
															</div>
														</div>
														
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
								<?php
						}
					} else {
                        if(mysqli_num_rows($choice) == 0) {
                            echo "<div style='display: flex; align-items: center; justify-content: center; font-size: 20px; width: 100%;'>Не найдено подходящих товаров</div>";
                        }
                        while($elem = mysqli_fetch_assoc($choice)) {
                        ?>
							<?php     
                    } 
                }
                ?>
            
                    </button>	
	</section>
	<!-- End Matches Section -->
	
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