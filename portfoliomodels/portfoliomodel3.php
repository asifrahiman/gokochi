<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Go kochi!</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="http://127.0.0.1/asif/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="http://127.0.0.1/asif/css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://127.0.0.1/asif/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" >
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://127.0.0.1/asif/"><i class="fa fa-spinner fa-pulse"></i>Go kochi!</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="http://127.0.0.1/asif/index.php">Services</a>
                    </li>
					
					<li class="page-scroll">
                        <a href="http://127.0.0.1/asif/about.php">About Kochi</a>
                    </li>
                    <li class="page-scroll">
                        <?php  session_start();
						 
						if(isset($_SESSION['user_name'])){$username=$_SESSION['user_name'];?>
                        <a href="http://127.0.0.1/asif/php-login/index.php">Welcome <?php echo $username;?></a>
						<?php  } else{?>
                        <a href="http://127.0.0.1/asif/php-login/index.php"><i class="fa fa-fw fa-sign-in"></i>Login</a><?php }?>
                    </li>
					<li class="page-scroll">
                        <a href="http://127.0.0.1/asif/index.php">Contact Us</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	
	
	<div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
	
    <div class="container"style="margin-top:0px; ">
		<div class="portfolio-modal " >
		 <div class="modal-content">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-align=centre;">
                        <div class="modal-body">
                            <h2>Kochi Yellow Pages</h2>
                            <hr class="star-primary">
                            <img src="http://127.0.0.1/asif/img/portfolio/circus.png" class="img-responsive img-centered" alt="">
                            <p>Get information about various services available in kochi.<br> <a href="http://127.0.0.1/asif/">Go Kochi!</a></p>
                            
						</div>
                    	<br>
						<form action="http://127.0.0.1/asif/yellowpage/index.php" method="get" style="margin-top:100px;margin-bottom:-50px;"  novalidate>
							<div class="row control-group"  width=100% style="margin-left:0px; margin-right:0px;">
								<div class="form-group col-md-10 floating-label-form-group controls">
									<input type="text" class="form-control" placeholder="Search for Shops,Items"  name="name" id="search_tag" required data-validation-required-message="Enter a shop name, shop type, shop item">
								</div>
								<div class="col-md-2">
									<button type="submit" style="margin-top:0px;" class="btn btn-success btn-lg"><i class="fa fa-fw fa-shopping-cart"></i> Shop</button>
								</div>
							</div>
						</form>
					</div>   
				</div>
			</div>
		</div>
		
			<div class="row">
                <div class="col-md-7 pull-right">
                    <a href="http://127.0.0.1/asif/"  style=" margin-bottom: 100px;" class="btn btn-success btn-lg">Go Kochi!</a>
                </div>
            </div>
	</div>

	

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
                        <li><a style="color: white;" href="#">Privacy Policy</a>
                        </li>
                        <li><a style="color: white;" href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
					
                </div>
            </div>
        </div>
    </footer>

    
   

    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

</body>

</html>
