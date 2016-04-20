<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Travel Planning</title>

	
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
	<link href="css/3-col-portfolio.css" rel="stylesheet">
    
    

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
    
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../../"><i class="fa fa-spinner fa-pulse"></i>Gokochi</a>
            </div>
    
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../../">About Kochi</a>
                    </li>
                    <li>
                        <a href="../../">Services</a>
                    </li>
                    <li>
                        <a href="../../">Contact Us</a>
                    </li>
                </ul>
				<ul class="nav navbar-nav pull-right">
					
                    <li>
                       <?php  session_start();
						 
						if(isset($_SESSION['user_name'])){$username=$_SESSION['user_name'];?>
                        <a href="../../php-login/index.php">Welcome <?php echo $username;?></a>
						<?php  } else{?>
                        <a href="../../php-login/index.php"><i class="fa fa-fw fa-sign-in"></i>Login</a><?php }?>
                    </li>
                    
                </ul>
            </div>
    
        </div>
    
    </nav>

   
    <div class="container">

      
        <div id="page-content-wrapper">
            <div class="container-fluid">
		 <div class="row">
            <div class="col-lg-12">
			<h1 class="page-header">Plan Your Vacation in Kochi </h1>
                <h3> Select a fully customised, trip plan for free!!</h3></br>
            </div>
        </div>
		<div class="row">
            <div class="col-md-4 portfolio-item text-center">
				<a href="index2.php">
					<img src="img/pck4.jpg" href= "#" style="width: 400px; height: 260px;" class="img-responsive" alt="">
					<h4>
						Package1
					</h4></a>
					<blockquote>
					<li>3 DAYS / 2 NIGHTS</li>
					<li>Price : 12,500</li>
						</blockquote> <br><br>
					
				
            </div>
			<div class="col-md-4 portfolio-item text-center">
                <a href="index1.php">
					<img src="img/pck1.jpg" href= "#"style="width: 400px; height: 260px;" class="img-responsive" alt="">
					<h4>
						Package2
					</h4></a>
					<blockquote>
					<li>3 DAYS / 2 NIGHTS</li>
					<li>Price : 22,500</li>
						</blockquote> <br>
				
            </div>
            <div class="col-md-4 portfolio-item text-center">
                <a href="index4.php">
					<img src="img/pck3.jpg" href= "#" style="width: 400px; height: 260px;" class="img-responsive" alt="">
					<h4>
						Package3
					</h4></a>
					<blockquote>
					<li>3 DAYS / 2 NIGHTS</li>
					<li>Price : 50,000</li>
						</blockquote> <br><br>
				
            </div>
			<div class="col-md-4 portfolio-item text-center">
				<a href="index3.php">
					<img src="img/kerala.jpg" href= "#" style="width: 400px; height: 260px;" class="img-responsive" alt="">
					<h4>
						Package4
					</h4></a>
					<blockquote>
					<li>4 DAYS / 3 NIGHTS</li>
					<li>Price : 85,0000</li>
						</blockquote> <br>
				
            </div>
           
		</div>
        <hr>

        
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
           
        </footer>

    </div>
   
    <script src="js/jquery.js"></script>

   
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
