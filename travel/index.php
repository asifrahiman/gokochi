<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" type="image/png" href="../img/fav/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="../img/fav/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="../img/fav/favicon-16x16.png" sizes="16x16">
    <title>GoKochi Travel</title>

   
    <link href="css/bootstrap.min.css" rel="stylesheet">

   
    <link href="css/agency.css" rel="stylesheet">

   
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

   
</head>

<body >
	
   
   <nav class="navbar navbar-default navbar-fixed-top">
   <div class="container">
   
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../"><i class="fa fa-spinner fa-pulse"></i>Gokochi</a>
            </div>
   
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../">About Kochi</a>
                    </li>
                    <li>
                        <a href="../">Services</a>
                    </li>
                    <li>
                        <a href="../">Contact Us</a>
                    </li>
                </ul>
				<ul class="nav navbar-nav pull-right">
                    <li>
                        <?php  session_start();
						 
						if(isset($_SESSION['user_name'])){$username=$_SESSION['user_name'];?>
                        <a href="../php-login/index.php">Welcome  <?php echo $username;?></a>
						<?php  } else{?>
                        <a href="../php-login/index.php"><i class="fa fa-fw fa-sign-in"></i>Login</a><?php }?>
                    </li>
                    
                </ul>
            </div>
   
        </div>
   
    </nav>
	<header style="background-attachment: fixed;">
        <div class="container">
            <div class="intro-text">
                <div  style="color: rgb(42, 62, 71);" class="intro-lead-in">GoKochi!</div>
             </div>
        </div>
    </header>

    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Metro Melange </h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="travelmain/index.php" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/fishing_net.jpg" style="width: 400px; height: 260px;" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Travel destinations</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="hotel/index.php" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/taj.jpg" style="width: 400px; height: 260px;" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Hotels & Restaurants</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="spa/index.php" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/kathak.jpg" style="width: 400px; height: 260px;" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Spa & Wellness </h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="tourism/index.php" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/travel3.jpg" style="width: 400px; height: 260px;" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Travel Planning</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="festivals/index.php" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/fest.jpg" style="width: 400px; height: 260px;" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Music, Arts & Festivals</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="entertainment/index.php" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/jtpac1.jpg" style="width: 400px; height: 260px;" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Entertainment and Fun</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
        <footer class="text-center">
       
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        Copyright &copy; Gokochi! 2016
                    </div>
					<div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4" >
                    <ul class="list-inline quicklinks">
                        <li><a  href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
					
                </div>
            </div>
        </div>
    </footer>

    </div>


    

   <script src="js/jquery.js"></script>

    
    <script src="js/bootstrap.min.js"></script>

    
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    
    <!script src="js/jqBootstrapValidation.js"></script>
    <!script src="js/contact_me.js"></script>

    
    <script src="js/agency.js"></script>

</body>

</html>
