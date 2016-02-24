<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gokochi Travel </title>




    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	
	

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../"><i class="fa fa-spinner fa-pulse"></i>Gokochi</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
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
                        <a href="../php-login/index.php">Welcome <?php echo $username;?></a>
						<?php  } else{?>
                        <a href="../php-login/index.php"><i class="fa fa-fw fa-sign-in"></i>Login</a><?php }?>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	<form action="index.php" method="get" novalidate>
								<div class="row control-group container" style="margin-left:10%;padding-top:20px">
									<div class="form-group col-sm-10 floating-label-form-group controls">
										<input type="text" class="form-control" placeholder="Search for Tourist destinations"  name="name" id="search_tag" required data-validation-required-message="Enter a tourist destination">
										<p class="help-block text-danger"></p>
									</div>
									<div class="col-sm-2">
										<button type="submit" class="btn btn-success"><i class="fa fa-fw fa-shopping-bag"></i>Travel</button>
									</div>
								</div>
							
								
								<div id="success"></div>
							</form>
    <!-- Page Content -->
    <div class="container" style="margin-top:-50px;">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tour Around Kochi
					 <small>Your guide to visit ,enjoy & shop in kochi</small>

                </h1>
            </div>
        </div>
        <!-- /.row -->
		 <!-- /.row -->
		 <div class="row carousel-holder">
					<div class="col-md-10 pull-right">
					<div class="row">
					<div class="col-md-10 ">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                                
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
								<li data-target="#carousel-example-generic" data-slide-to="3"></li>
								<li data-target="#carousel-example-generic" data-slide-to="4"></li>
								<li data-target="#carousel-example-generic" data-slide-to="5"></li>
								<li data-target="#carousel-example-generic" data-slide-to="6"></li>
                            </ol>
                            <div class="carousel-inner text-align=centre">
                                <?php  $conn = new mysqli("23.96.93.179", "root","g0k0chi@123","travel");
								$sql = "SELECT name,id FROM `carousal` where id=1";
								$result = $conn->query($sql);
								
								$row = $result->fetch_assoc()?>
								<div class="item active">
								    
                                    <img class="slide-image" src="getimg1.php?id=<?php echo $row['id'];?>" width="300px" height="300px" alt="">
									<div class="carousel-caption">
										<h3><?php echo $row['name']?></h3>
										<p>...</p>
									</div>
                                </div>
								<?php 
								$sql = "SELECT name,id FROM `carousal` where id!=1";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {?>
                                <div class="item">
									
                                    <img class="slide-image" src="getimg1.php?id=<?php echo $row['id'];?>" width="300px" height="300px" alt="">
									<div class="carousel-caption">
										<h3><?php echo $row['name']?></h3>
										<p>...</p>
									</div>
                                </div>
								 
								<?php }
								} else {
									echo "0 results";
								}
								$conn->close();?>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
					</div>
					</div>
                </div>
				<br>
               
		<!-- Projects Row -->
        <div class="row">
			
				<?php
				error_reporting(0);
				
				if($_GET['name'])
				{$search=$_GET['name'];
				$search_exploded = explode (" ", $search);
 
				foreach($search_exploded as $search_each)
				{
				$x++;
				if($x==1)
				$construct .="name LIKE '%$search_each%'";
				else
				$construct .="AND name LIKE '%$search_each%'";
				 
				}
				$sql ="SELECT * FROM tourism WHERE $construct";}
				else
				{$sql = "SELECT * FROM `tourism`";}
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {?>
					<div class="col-md-4 ">
					<a href="placedesc/index.php?key1=<?php echo $row["key1"]?>" target="_blank">
                    <img class="img-responsive" src="getimg.php?id=<?php echo $row["key1"]?>" width="700px" height="200px" alt=""/>
					</a>
					<h3>
                   
					<a href="placedesc/index.php?key1=<?php echo $row["key1"]?>"><p><?php echo $row["name"]?></p></a>
					</h3>
					
					<p><?php echo $row["description"]?></p>
					
					</div>
					<?php }
				} else {
					echo "0 results";
				}
				$conn->close();

				?>
            
            
        </div>
        <!-- /.row -->

        

      
        <hr>
        <!-- Footer -->
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
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
