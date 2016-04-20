<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tourism packages</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
    <link href="css/half-slider.css" rel="stylesheet">
	<link href="css/round-about.css" rel="stylesheet">

</head>

<body>

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

    
    <header id="myCarousel" class="carousel slide" style="height: 75%;">
       
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        
        <div class="carousel-inner">
            <div class="item active">
               
                <div class="fill" style="background-image:url('../travelmain/getimg.php?id=7');"></div>
                <div class="carousel-caption">
                    <h2>Mattanchery palace</h2>
                </div>
            </div>
            <div class="item">
                
                <div class="fill" style="background-image:url('../travelmain/getimg.php?id=6');"></div>
                <div class="carousel-caption">
                    <h2>Jewish synagogue</h2>
                </div>
            </div>
            <div class="item">
                
                <div class="fill" style="background-image:url('../hotel/getimg.php?id=3');"></div>
                <div class="carousel-caption">
                    <h2>Ramada hotel</h2>
                </div>
            </div>
			<div class="item">
                
                <div class="fill" style="background-image:url('../entertainment/getimg.php?id=3');"></div>
                <div class="carousel-caption">
                    <h2>Oberon mall</h2>
                </div>
            </div>
			<div class="item">
                
                <div class="fill" style="background-image:url('../entertainment/getimg.php?id=5');"></div>
                <div class="carousel-caption">
                    <h2>PVR</h2>
                </div>
            </div>
        </div>

       
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>


   
    <div class="container">

        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">3 days and 2 nights
                    <small>It's Nice to Meet You!</small>
                </h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel?</p>
            </div>
        </div>

        
        <div class="row">
			<div class="col-lg-4">
				<div class="col-lg-12">
					<h2 class="page-header">Day 1</h2>
				</div>
				
				<div class="col-lg-12 col-sm-12 text-center">
					<img class="img-circle img-responsive img-center" src="../travelmain/getimg.php?id=7" alt="">
					<h3>Mattanchery palace
						<small>10:15-12:45</small>
					</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse posuere quam vel dolor placerat eleifend. Proin pharetra purus sed elit malesuada, ac vulputate lectus egestas. Curabitur non nibh orci.</p>
				</div>
				<div class="col-lg-12 col-sm-12 text-center">
					<img class="img-circle img-responsive img-center" src="../travelmain/getimg.php?id=6" alt="">
					<h3>Jewish synagogue
						<small>1:15-4:30</small>
					</h3>
					<p>Curabitur eu velit et arcu rutrum blandit. Maecenas in lacus urna.</p>
				</div>
				<div class="col-lg-12 col-sm-12 text-center">
					<img class="img-circle img-responsive img-center" src="../entertainment/getimg.php?id=3" alt="">
					<h3>Oberon mall
						<small>5:30-7:30</small>
					</h3>
					<p>Quisque sit amet fermentum massa. Nulla faucibus sagittis dui eget pretium. Suspendisse scelerisque, nibh nec consectetur tincidunt, velit ipsum auctor dui,</p>
				</div>
				<div class="col-lg-12 col-sm-12 text-center">
					<img class="img-circle img-responsive img-center" src="../hotel/getimg.php?id=3" alt="">
					<h3>Ramada hotel
						<small>Retire for the night</small>
					</h3>
					<p>Morbi in consequat nunc. Mauris tempor justo rhoncus augue vehicula ullamcorper. Nullam non libero a justo dapibus vestibulum.</p>
				</div>
				
			</div>
			<div class="col-lg-4">
				<div class="col-lg-12">
					<h2 class="page-header">Day 2</h2>
				</div>
				<div class="col-lg-12 col-sm-12 text-center">
					<img class="img-circle img-responsive img-center" src="../spa/getimg.php?id=8" alt="">
					<h3>Latana Spa
						<small>10:00-12:00</small>
					</h3>
					<p>Mauris cursus nibh sed ipsum imperdiet rhoncus ut sed orci. Mauris ultricies urna libero, ut feugiat neque pretium eu. </p>
				</div>
				<div class="col-lg-12 col-sm-12 text-center">
					<img class="img-circle img-responsive img-center" src="../travelmain/getimg.php?id=8" alt="">
					<h3>St francis church
						<small>1:30-5:00</small>
					</h3>
					<p>Curabitur eu velit et arcu rutrum blandit. Maecenas in lacus urna.</p>
				</div>
				<div class="col-lg-12 col-sm-12 text-center">
					<img class="img-circle img-responsive img-center" src="../entertainment/getimg.php?id=5" alt="">
					<h3>PVR
						<small>5:30- </small>
					</h3>
					<p>Quisque sit amet fermentum massa. Nulla faucibus sagittis dui eget pretium. Suspendisse scelerisque, nibh nec consectetur tincidunt, velit ipsum auctor dui,</p>
				</div>
				<div class="col-lg-12 col-sm-12 text-center">
					<img class="img-circle img-responsive img-center" src="../hotel/getimg.php?id=3" alt="">
					<h3>Ramada hotel
						<small>Retire for the night</small>
					</h3>
					<p>Nullam suscipit felis interdum velit congue suscipit. Vivamus tempus hendrerit efficitur. </p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="col-lg-12">
					<h2 class="page-header">Day 3</h2>
				</div>
				<div class="col-lg-12 col-sm-12 text-center">
					<img class="img-circle img-responsive img-center" src="../travelmain/getimg.php?id=2" alt="">
					<h3>Marine Drive
						<small>10:15-12:45</small>
					</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse posuere quam vel dolor placerat eleifend. Proin pharetra purus sed elit malesuada, ac vulputate lectus egestas. Curabitur non nibh orci.</p>
				</div>
				<div class="col-lg-12 col-sm-12 text-center">
					<img class="img-circle img-responsive img-center" src="../hotel/getimg.php?id=3" alt="">
					<h3>Ramada hotel
						<small>Check out at 3:00</small>
					</h3>
					<p>Sed at augue metus. Pellentesque hendrerit in magna nec porttitor. Aenean scelerisque fringilla porta. Maecenas tincidunt et purus eget tempus. Mauris congue eros ac mi venenatis faucibus.</p>
				</div>
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

    
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
