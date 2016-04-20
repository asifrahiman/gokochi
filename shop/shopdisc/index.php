<?php?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gokochi shopping</title>

   
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   
    <link href="css/shop-homepage.css" rel="stylesheet">
	<link href="css/simple-sidebar.css" rel="stylesheet">


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
                        <a href="proddesc/showcart.php"><i class="fa fa-fw fa-shopping-cart"></i>Cart</a>
                    </li>
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
	<?php error_reporting(0);
$id=1;
if($_GET['id']!=null)
$id = $_GET['id'];
if($_GET['name']!=null)
$name=$_GET['name'];
if($_GET['category']!=null)
$cat=$_GET['category'];
				
				$dbname = "shops";

				// Create connection
				 $conn = new mysqli("localhost", "asif","asif", $dbname);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}

				
				$sql = "SELECT * FROM `shops` where shop_id=$id";
				
				
				if ($conn->query($sql)) {

					$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {{ $shopid =$row["shop_id"] ?>
					
						
    <div id="wrapper">


        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a>Categories
                    </a>
                </li>
                <li>
                    <a  href="index.php?id=<?php echo $row["shop_id"]?>" >all</a>
                </li>
                <li>
                    <?php $sql2 = "SELECT DISTINCT `category` FROM `products` where shop_id=$shopid	 ";
					if ($conn->query($sql2)) {
					$result2 = $conn->query($sql2);
					if ($result2->num_rows > 0) {
					while($row2 = $result2->fetch_assoc()) {?>
                    <a href="index.php?id=<?php echo $row["shop_id"]?>&category=<?php echo $row2["category"]?>"><?php echo $row2["category"]?></a>
					<?php }}}?>
                </li>
				
                
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
					
						<form action="index.php?" method="get" novalidate>
								<div class="row control-group" style="margin-left:10%;padding-top:20px">
									<div class="form-group col-sm-10 floating-label-form-group controls">
										<input type="hidden" name="id" value="<?php echo $row["shop_id"]?>" />
										<input type="text" class="form-control" placeholder="search for products from <?php echo $row["shop_name"]?>"  name="name" id="search_tag" required data-validation-required-message="search for products from <?php echo $row["shop_name"]?>">
										<p class="help-block text-danger"></p>
									</div>
									<div class="col-sm-2">
										<button type="submit" class="btn btn-success btn-lg"><i class="fa fa-fw fa-shopping-bag"></i> Shop</button>
									</div>
								</div>
							
								
								<div id="success"></div>
							</form>
						<div class="row">
						<div class="col-xs-12 " >
						<a href="#menu-toggle" class="btn btn-success" id="menu-toggle">Toggle Categories</a><br>
						</div>
						</div><br>
						<div class="row">
						
						<div class="col-xs-12 " >
						  <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="100%" height="300px"  src="https://maps.google.com/maps?q=<?php echo $row["lattitude"]?>,<?php echo $row["longtitude"]?>&ie=UTF8&t=roadmap&z=12&iwloc=B&output=embed"></iframe>
						</div>
						</div><br>
        <div class="row">
			<div class="col-md-12" >
				<div class="col-xs-6 "  >
							<img src="getimg.php?id=<?php echo $row["shop_id"]?>" style="width:100%; height:auto" alt=""></a><br>
				</div>
				<div class="row carousel-holder">
					<div class="col-md-6 pull-right">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="getimg.php?id=<?php echo $row["shop_id"]?>" width="300px" height="300px" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="getimg.php?id=2" width="300px" height="300px" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="getimg.php?id=3" width="300px" height="300px" alt="">
                                </div>
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
				
                <div class="row">
						<?php	
						$shopname=$row["shop_name"];

						// Create connection
						
						// Check connection
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						}
						
						$sql1 = "SELECT * FROM `products` where shop_id=$shopid	 ";
						if($_GET['name'])
						{
							$search=$_GET['name'];
							$search_exploded = explode (" ", $search);
			 
							foreach($search_exploded as $search_each)
							{
							$x++;
							if($x==1)
							$construct .="name LIKE '%$search_each%'";
							else
							$construct .="AND name LIKE '%$search_each%'";
							 
							}
							$sql1 = "SELECT * FROM `products` where shop_id=$shopid	and $construct";
						}
						
						if($_GET['category']!=null)
						$sql1 = "SELECT * FROM `products` where shop_id=$shopid	and category='$cat' ";
						if ($conn->query($sql1)) {
						$result1= $conn->query($sql1);
						if ($result1->num_rows > 0) { 
						while($row1 = $result1->fetch_assoc()) {{?>
						
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail"><a href="proddesc/index.php?name=<?php echo $row1["name"]?>&id=<?php echo $row1["shop_id"]?>">
                            <img src="getimg1.php?id=<?php echo $row1["id"]?>" alt=""></a>
                            <div class="caption">
                                <h4 class="pull-right"><i class="fa fa-fw fa-inr"></i><?php echo $row1["price"]?></h4>
                                <h4><a  href="proddesc/index.php?name=<?php echo $row1["name"]?>&id=<?php echo $row1["shop_id"]?>"><?php echo $row1["name"]?></h4></a>
                                </h4>
								<h4><?php if(!$row1["stock"]){echo "out of stock";} ?></h4>
                                <p><?php echo $row1["product_details"]?><a href="proddesc/index.php?name=<?php echo $row1["name"]?>&id=<?php echo $row1["shop_id"]?>"></a>.</p>
                            </div>
                            <div class="ratings">
                                <?php $name=$row1["name"];
						  $sql="SELECT COUNT(*) FROM `rivew` where id=$id and name='$name'  ";
						  
						  $result3=$conn->query($sql); 
						  $row3 = $result3->fetch_assoc();
						  $count=$row3['COUNT(*)'];
						  $sql="SELECT * FROM `rivew` where id=$id and name='$name'  ";
						 
						  $result3=$conn->query($sql);
							$avg=0;
						  if ($result3->num_rows > 0) {$sum=0;
						  while($row3 = $result3->fetch_assoc()) {
							  
							  $sum=$sum+$row3['rating'];
							  
						  }$avg=$sum/$count;
						 }
						  
						  ?>
                        <p class="pull-right"><?php echo $count ?> reviews</p>
                        <p>
                            <?php $num = round($avg);
						$num1=5;
						while($num>=1){?>
						<span class="glyphicon glyphicon-star"></span><?php $num=$num-1;$num1=$num1-1;}
                         while($num1>0){?>
						<span class="glyphicon glyphicon-star-empty"></span><?php $num1=$num1-1;}?>   
                          <?php echo round($avg); ?> stars
                        </p>
                            </div>
                        </div>
                    </div>
						<?php }}
							} else {
							echo "No results";
							}}
							?>
                </div>
            </div>
        </div>
        </div>

    </div>
	 
							 <?php }}
    } else {
    echo "0 results";
    }}  $conn->close();
    ?>
	

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

    
	

    <script src="js/jquery.js"></script>


    <script src="js/bootstrap.min.js"></script>


    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
