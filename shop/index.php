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
    <title>Gokochi shopping</title>

   
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   
    <link href="css/3-col-portfolio.css" rel="stylesheet">

</head>

<body id="page-top" >
	

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
                        <a href="shopdisc/proddesc/showcart.php"><i class="fa fa-fw fa-shopping-cart"></i>Cart</a>
                    </li>
                    <li>
                        <?php  session_start();
						 
						if(isset($_SESSION['user_name'])){$username=$_SESSION['user_name'];?>
                        <a href="../php-login/index.php">Welcome <?php echo $username;?></a>
						<?php  } else{?>
                        <a href="../php-login/index.php"><i class="fa fa-fw fa-sign-in"></i>Login</a><?php }?>
                    </li>
                    
                </ul>
            </div>

        </div>

    </nav>
	<form action="index.php" method="get" novalidate>
		<div class="row control-group container" style="margin-left:10%;padding-top:20px">
			<div class="form-group col-sm-10 floating-label-form-group controls">
				<input type="text" class="form-control" placeholder="Search for Shops or Products"  name="name" id="search_tag" >
			</div>
			<div class="col-sm-2">
				<button type="submit" class="btn btn-success btn-lg"><i class="fa fa-fw fa-shopping-bag"></i> Shop</button>
			</div>
		</div>
	</form>

    <div class="container" style="margin-top:-50px;">


        <div class="row">
            <div class="col-lg-12">
				<div class="well">
					<div id="review-box">
						<h4>Special Offers For You</h4>
						<hr>
						<div class="row">
							<div class="col-md-12" id="offers">
								<small>*offers not available for delivery</small>
							</div>
						</div>
					</div>
                </div>
                <h1 class="page-header">Shops
				    <?php error_reporting(0);
					if($_GET['name']){?>
                    <small  >shops with name <?php echo $_GET['name']?></small>
					<?php }else{?>
                    <small>shops in kochi </small><?php } ?>
				</h1>	
					

        <div class="row">
			
				<?php
				
				
				$dbname = "shops";

				
				 $conn = new mysqli("localhost", "asif","asif", $dbname);
				
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				} 
				
				if($_GET['name'])
				{
				$search=$_GET['name'];
				$search_exploded = explode (" ", $search);
	
				foreach($search_exploded as $search_each)
				{
				$x++;
				if($x==1)
				$construct ="shop_name LIKE '%$search_each%'";
				else
				$construct .="AND shop_name LIKE '%$search_each%'";
				 
				}
				$sql = "SELECT COUNT(*) FROM shops WHERE $construct";
				}
				
				else
				$sql = "SELECT COUNT(*) FROM `shops`";
				$result = $conn->query($sql);
				$rec_limit =6;
				$row = $result->fetch_assoc();
				$rec_count = $row['COUNT(*)'];
				
				if( isset($_GET['page'] ) ) {
					$page = $_GET['page']; 
					$offset = $rec_limit * $page ;
					$page=$page+1;
					
				}else {
					$page = 1;
					$offset = 0;
					
				}
				$left_rec = $rec_count - ($page * $rec_limit);
				
				$name=$_GET['name'];
				if($_GET['name'])
				{
					$search=$_GET['name'];
					$search_exploded = explode (" ", $search);
	 
					foreach($search_exploded as $search_each)
					{
					$x++;
					if($x==1)
					$construct ="shop_name LIKE '%$search_each%'";
					else
					$construct .="AND shop_name LIKE '%$search_each%'";
					}
				$sql = "SELECT shop_id,shop_name,shop_description FROM `shops` where $construct LIMIT $offset, $rec_limit";
				}
				
				else
				$sql = "SELECT shop_id,shop_name,shop_description FROM `shops` LIMIT $offset, $rec_limit";

				if ($conn->query($sql)) {
					
					$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					
					while($row = $result->fetch_assoc()) {{?>
					<div class="col-md-4 portfolio-item">
					<a href="shopdisc/index.php?id=<?php echo $row["shop_id"]?>&name=" target="_blank">
                    <img class="img-responsive" src="getimg.php?id=<?php echo $row["shop_id"]?>" width="700px" height="200px" alt=""/>
					</a>
					<h3>
                    <a href="shopdisc/index.php?id=<?php echo $row["shop_id"]?>&name="><?php echo $row["shop_name"]?></a>
					</h3>
					
					<p><?php echo $row["shop_description"]?></p>
					
					</div>
					<?php }}?>
            
            
        </div>
        

        

        <hr>
		
        
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    
						<?php $_PHP_SELF = &$_SERVER['PHP_SELF'];
							 if( $left_rec < 0 && $page>1 ) {
								$last = $page - 2;
								echo "<li><a href = \"$_PHP_SELF?page=$last&name=$name\">&laquo;</a></li>";
								for ($x =0,$y=1; $x < $rec_count/$rec_limit; $x++,$y++) {
									if($page==$y)
									{
										echo "<li class=\"active\"><a href=\"$_PHP_SELF?page=$x&name=$name\">$y</a></li>";	
									}
									else
									{
										echo "<li><a href=\"$_PHP_SELF?page=$x&name=$name\">$y</a></li>";
									}
									} 
									}
							 else if( $page == 1 && $left_rec >= 1) {
								for ($x =0,$y=1; $x < $rec_count/$rec_limit; $x++,$y++) {
									if($page==$y)
									{
										echo "<li class=\"active\"><a href=\"$_PHP_SELF?page=$x&name=$name\">$y</a></li>";	
									}
									else
									{
										echo "<li><a href=\"$_PHP_SELF?page=$x&name=$name\">$y</a></li>";
									}
									} 
								echo "<li><a href = \"$_PHP_SELF?page=$page&name=$name\">&raquo;</a></li>";
							 }else if( $page > 1 &&!($left_rec < 0 ) ) {
								$last = $page - 2;
								echo "<li><a href = \"$_PHP_SELF?page=$last&name=$name\">&laquo;</a> </li>";
								for ($x =0,$y=1; $x < $rec_count/$rec_limit; $x++,$y++) {
									if($page==$y)
									{
										echo "<li class=\"active\"><a href=\"$_PHP_SELF?page=$x&name=$name\">$y</a></li>";	
									}
									else
									{
										echo "<li><a href=\"$_PHP_SELF?page=$x&name=$name\">$y</a></li>";
									}
									} 
								echo"<li><a href = \"$_PHP_SELF?page=$page\">&raquo;</a></li>";
							 }
						
						?>
                    
               
            </div>
        </div>		
					<?php
						} else {
							echo "0 results";
						}
						} else {
							echo "Error creating table: " . $conn->error;
						}

						
					?>
       
				
        <hr>
		
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Products
				    <?php if($_GET['name']){?>
                    <small>shops selling <?php echo $_GET['name']?></small>
					<?php }else{?>
                    <small>Search for a product </small><?php } ?>
                </h1>
            </div>
        </div>
        
        <div class="row">
			
				<?php 
				
				$dbname = "shops";

				$conn = new mysqli("localhost", "asif","asif", $dbname);
				
				
				if($_GET['name'])
				{
				$search=$_GET['name'];
				$search_exploded = explode (" ", $search);
				$x=0;
				foreach($search_exploded as $search_each)
				{
				$x++;
				if($x==1)
				$construct ="name LIKE '%$search_each%'";
				else
				$construct .="AND name LIKE '%$search_each%'";
				 
				}
				$sql = "SELECT COUNT(*) FROM products WHERE $construct";
				}
				
				else
				$sql = "SELECT COUNT(*) FROM `products`";
				$result = $conn->query($sql);
				$rec_limit1 =6;
				$row = $result->fetch_assoc();
				$rec_count1 = $row['COUNT(*)'];
				
				if( isset($_GET['page1'] ) ) {
					$page1 = $_GET['page1']; 
					$offset1 = $rec_limit1 * $page1 ;
					$page1=$page1+1;
					
				}else {
					$page1 = 1;
					$offset1 = 0;
					
				}
				$left_rec1 = $rec_count1 - ($page1 * $rec_limit1);
				$construct="";
				$name=$_GET['name'];
				if($_GET['name'])
				{
					$search=$_GET['name'];
					$search_exploded = explode (" ", $search);
					$x=0;
					foreach($search_exploded as $search_each)
					{
					$x++;
					if($x==1)
					$construct ="name LIKE '%$search_each%'";
					else
					$construct .="AND name LIKE '%$search_each%'";
					}
				$sql = "SELECT name,id,stock,shop_name,shops.shop_id FROM `products`,shops where products.shop_id=shops.shop_id and $construct LIMIT $offset1, $rec_limit1";
				}
				
				else
				$sql = "SELECT name,id,stock,shop_name,shops.shop_id FROM `products`,shops where products.shop_id=shops.shop_id LIMIT $offset1, $rec_limit1 ";

				
				if ($conn->query($sql)) {
					
					$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					
					while($row = $result->fetch_assoc()) {{?>
					<div class="col-md-4 portfolio-item">
					<a href="shopdisc/proddesc/index.php?name=<?php echo $row["name"]?>&id=<?php echo $row["shop_id"]?>">
                    <img class="img-responsive" src="getimg1.php?name=<?php echo $row["name"]?>&id=<?php echo $row["shop_id"]?>" width="700px" height="200px" alt=""/>
					</a><h4 class="pull-right"><?php if(!$row["stock"]){echo "out of stock";} ?></h4>
					<h3>
                    <a  href="shopdisc/proddesc/index.php?name=<?php echo $row["name"]?>&id=<?php echo $row["shop_id"]?>"><?php echo $row["name"]?></a>
					</h3>
					<p><?php echo $row["shop_name"]?></p>
					
					</div>
				
				<?php }}?>
        </div>
        

        

        <hr>
		
        
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    
						<?php $_PHP_SELF = &$_SERVER['PHP_SELF'];
							 if( $left_rec1 < 0 && $page1>1 ) {
								$last1 = $page1 - 2;
								echo "<li><a href = \"$_PHP_SELF?page1=$last1&name=$name\">&laquo;</a></li>";
								for ($x1 =0,$y1=1; $x1 < $rec_count1/$rec_limit1; $x1++,$y1++) {
									if($page1==$y1)
									{
										echo "<li class=\"active\"><a href=\"$_PHP_SELF?page1=$x1&name=$name\">$y1</a></li>";	
									}
									else
									{
										echo "<li><a href=\"$_PHP_SELF?page1=$x1&name=$name\">$y1</a></li>";
									}
									} 
									}
							 else if( $page1 == 1 && $left_rec1 >= 1) {
								for ($x1 =0,$y1=1; $x1 < $rec_count1/$rec_limit1; $x1++,$y1++) {
									if($page1==$y1)
									{
										echo "<li class=\"active\"><a href=\"$_PHP_SELF?page1=$x1&name=$name\">$y1</a></li>";	
									}
									else
									{
										echo "<li><a href=\"$_PHP_SELF?page1=$x1&name=$name\">$y1</a></li>";
									}
									} 
								echo "<li><a href = \"$_PHP_SELF?page1=$page1&name=$name\">&raquo;</a></li>";
							 }else if( $page1 > 1 &&!($left_rec1 < 0 ) ) {
								$last1 = $page1 - 2;
								echo "<li><a href = \"$_PHP_SELF?page1=$last1&name=$name\">&laquo;</a> </li>";
								for ($x1 =0,$y1=1; $x1 < $rec_count1/$rec_limit1; $x1++,$y1++) {
									if($page1==$y1)
									{
										echo "<li class=\"active\"><a href=\"$_PHP_SELF?page1=$x1&name=$name\">$y1</a></li>";	
									}
									else
									{
										echo "<li><a href=\"$_PHP_SELF?page1=$x1&name=$name\">$y1</a></li>";
									}
									} 
								echo"<li><a href = \"$_PHP_SELF?page1=$page&name=$name\">&raquo;</a></li>";
							 }
						
						?>
                    
                </ul>
            </div>
        </div>		
					<?php
						} else {
							echo "0 results";
						}
						} else {
							echo "Error creating table: " . $conn->error;
						}

						
					?>
        
        <hr>

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
	 <div class="scroll-top ">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
    <script src="js/jquery.js"></script>


    <script src="js/bootstrap.min.js"></script>
	<script src="js/freelancer.js"></script>
	<script type="">
	$(function() {
	 if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(showPosition);
		  } else {
			alert("Geolocation API not supported by your browser.");
		  }
	});
	
	function showPosition(position) {
	 	<?php 
		$sql = "SELECT * FROM discount";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()) {
			$shopid=$row['shop_id'];
			$sql = "SELECT * FROM shops where shop_id=$shopid ";
			$result1 = $conn->query($sql);
			$row1 = $result1->fetch_assoc();
		?>
		var lat1=position.coords.latitude;
		var lon1=position.coords.longitude;
		var lat2=<?php echo $row1['lattitude'];?>;
		var lon2=<?php echo $row1['longtitude'];?>;
		var radlat1 = Math.PI * lat1/180
		var radlat2 = Math.PI * lat2/180
		var theta = lon1-lon2
		var radtheta = Math.PI * theta/180
		var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
		dist = Math.acos(dist)
		dist = dist * 180/Math.PI
		dist = dist * 60 * 1.1515
		dist = dist * 1.609344
		var dist1=parseInt(<?php echo $row['distance']; ?>);
		alert(dist);
		if(dist<dist1)
		{var q="<p><?php echo $row['offers']; ?> from <?php echo $row1['shop_name'];?> Coupon Code:<?php echo $row['coupon_code']; ?> </p><hr>";
		$("#offers").prepend(q);}
		<?php }   ?>
	}	
	
	
	</script>

</body>

</html>
