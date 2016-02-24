<?php
error_reporting(0);

$sum1=0;
?> 
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gokochi shopping</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

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
                <a class="navbar-brand" href="../asif"><i class="fa fa-spinner fa-pulse"></i>Gokochi</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="http://127.0.0.1/asif/about.php">About Kochi</a>
                    </li>
                    <li>
                        <a href="http://127.0.0.1/asif">Services</a>
                    </li>
                    <li>
                        <a href="http://127.0.0.1/asif">Contact Us</a>
                    </li>
                </ul>
				<ul class="nav navbar-nav pull-right">
                    <li>
                        <a href="http://127.0.0.1/asif/php-login/index.php?flag=2" ><i class="fa fa-fw fa-shopping-cart"></i>Cart</a>
                    </li>
					<li>
						<?php  session_start();
						$username=$_SESSION['user_name']; 
						if($_SESSION['user_name']){?>
                        <a href="http://127.0.0.1/asif/php-login/index.php">Welcome <?php echo $username;?></a>
						<?php  } else{?>
                        <a href="http://127.0.0.1/asif/php-login/index.php?flag=2"><i class="fa fa-fw fa-sign-in"></i>Login </a><?php }?>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-fw fa-shopping-cart"></i>Cart
                    <small>Items in cart</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
		<div class="row">
		<?php   if(isset($_SESSION['user_name'])){
				$sql="select * from `cart` where `username`='$username'";
                $conn4 = new mysqli("localhost", "root","","asif");
				if ($conn4->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				if ($conn4->query($sql)) {

					$result4 = $conn4->query($sql);

				if ($result4->num_rows > 0) {
					// output data of each row
				while($row4 = $result4->fetch_assoc()) { $id=$row4["id"]; $name=$row4["name"]; $quantity=$row4["quantity"];
		
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "asif";

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}

				
				$sql = "SELECT * FROM `asif` where id=$id";
				
				
				if ($conn->query($sql)) {

					$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {{ $shopname=$row["username"]; ?>
					<?php	
				
				// Create connection
				$conn1 = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn1->connect_error) {
					die("Connection failed: " . $conn1->connect_error);
				}

				
				$sql1 = "SELECT * FROM $shopname where name='$name' ";
				
				
				if ($conn1->query($sql1)) {

					$result1= $conn1->query($sql1);

				if ($result1->num_rows > 0) {
					while($row1 = $result1->fetch_assoc()) {{?>
        <!-- Projects Row -->
			<p id="noprodbox" ></p>
            <div class="col-md-3" id="proddesc<?php echo $row1["name"]?><?php echo $row["id"]?>">
                <div class="thumbnail" ><a href="proddesc/index.php?name=<?php echo $row1["name"]?>&id=<?php echo $row["id"]?>">
                            <img style="height:200px" src="getimg1.php?prodid=<?php echo $row1["prodid"]?>&name=<?php echo $row["username"]?>" alt=""></a>
                            <div class="caption">
							
                                <?php if(!$row1["stock"]){$quantity=0;} ?>
								<h5 class="pull-right" id="updatedqty<?php echo $row1["name"]?><?php echo $row["id"]?>">.   Quantity-<?php echo $quantity;?></h5>
								<h5 class="pull-right"><i class="fa fa-fw fa-inr"></i><?php echo $row1["price"];$price=$row1["price"];$total=$quantity*$row1["price"];$sum1=$sum1+$total;?></h5>
								
                                <h4><a  href="index.php?name=<?php echo $row1["name"]?>&id=<?php echo $row["id"]?>"><?php echo $row1["name"]?></h4></a>
                                </h4>
								<h4><?php if(!$row1["stock"]){echo "out of stock";} ?></h4>
								
                                <p><?php echo $row1["description"]?><a href="index.php?name=<?php echo $row1["name"]?>&id=<?php echo $row["id"]?>"></a>.</p><br>
                            </div>
							<div class="caption" style="height:110px">
								<form accept-charset="UTF-8" class="pull-right" id="<?php echo $row1["name"]?><?php echo $row["id"]?>" method="get" >
									<input type="text" id="qty<?php echo $row1["name"]?><?php echo $row["id"]?>" class="form-control" placeholder="input quantity" name="quantity" />
									<input type="hidden" id="prodnm" name="name" value="<?php echo $name ?>" />
									<input type="hidden" id="prodid" name="id" value="<?php echo $id ?>" />
									<input type="hidden" id="oqty<?php echo $row1["name"]?><?php echo $row["id"]?>" name="name1" value="<?php echo $quantity ?>" />
									<input type="hidden" id="price<?php echo $row1["name"]?><?php echo $row["id"]?>" name="id1" value="<?php echo $price ?>" /><br>
									<button class="btn btn-success pull-right"  type="submit"><i class="fa fa-fw fa-shopping-cart"></i>Change quantity</button>
								</form><br><p id="changeqtystatus<?php echo $row1["name"]?><?php echo $row["id"]?>"></p>
							</div>
							
                            <div class="ratings" style="margin-bottom:10px">
                                <?php $name=$row1["name"];
						  $sql="SELECT COUNT(*) FROM `rivew` where id=$id and name='$name'  ";
						  $conn3 = new mysqli("localhost", "root","","asif");
						  $result3=$conn->query($sql); 
						  $row3 = $result3->fetch_assoc();
						  $count=$row3['COUNT(*)'];
						  $sql="SELECT * FROM `rivew` where id=$id and name='$name'  ";
						  $conn3 = new mysqli("localhost", "root","","asif");
						  $result3=$conn->query($sql);
							$avg=0;
						  if ($result3->num_rows > 0) {$sum=0;
						  while($row3 = $result3->fetch_assoc()) {
							  
							  $sum=$sum+$row3['rating'];
							  
						  }$avg=$sum/$count;
						 }
						  
						  $conn3->close();?>
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
						<form accept-charset="UTF-8"  id="prodr<?php echo $row1["name"]?><?php echo $row["id"]?>" method="get" >
									
									<input type="hidden" id="prodnm" name="name" value="<?php echo $name ?>" />
									<input type="hidden" id="prodid" name="id" value="<?php echo $id ?>" />
									
									<button class="btn btn-danger btn-sm"  type="submit"><i class="fa fa-fw fa-trash"></i>remove product</button>
						</form>
						
                            </div>
                        </div>
            </div>
            <?php }}
							} else {
							echo "0 results";
							}
							} else {
							echo "Error creating table: " . $conn1->error;
							}

							$conn1->close();
							?>
    <!-- /.container -->
	<?php }}
							} else {
							echo "0 results";
							}
							} else {
							echo "Error creating table: " . $conn->error;
							}

							
							?>
							<?php }
							} else {
							echo "no items in cart";
							}
							} else {
							echo "Error creating table: " . $conn->error;
							}

							$conn->close();
							?>
		</div>
							<div class="row" id="totpaybox">
							<div class="col-md-3 pull-right">
							<div class="thumbnail">
							<div class="caption">
							<h4 id="totpay">Total Payable<i class="fa fa-fw fa-inr"></i><?php echo $sum1;?> </h4>
							<form action="showcart.php" method="get" novalidate>
								
									
										<input type="hidden" name="username" value="<?php echo $_GET['username']?>" />
										<p class="help-block text-danger"></p>
									
									<div class="col-sm-2">
										<button type="submit" class="btn btn-success "><i class="fa fa-fw fa-credit-card"></i> Shop</button>
									</div>
								
							
								
								
							</form>
							</div>
							</div>
							</div>
							</div>
        <!-- Pagination --><?php } else{echo "please "?><a href="http://127.0.0.1/asif/php-login/index.php?flag=2" class="btn btn-success btn-green"><i class="fa fa-fw fa-sign-in"></i>Login</a><?php echo " to view cart";}?>
        
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
	
	 <script type="text/javascript">
	 var ab=parseInt(<?php echo $sum1;?>);
		<?php   if(isset($_SESSION['user_name'])){$username=$_SESSION['user_name'];
				$sql="select * from `cart` where `username`='$username'";
                $conn4 = new mysqli("localhost", "root","","asif");
				if ($conn4->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				if ($conn4->query($sql)) {

					$result4 = $conn4->query($sql);

				if ($result4->num_rows > 0) {
					// output data of each row
				while($row4 = $result4->fetch_assoc()) { $id=$row4["id"]; $name=$row4["name"]; $quantity=$row4["quantity"];
		
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "asif";

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}

				
				$sql = "SELECT * FROM `asif` where id=$id";
				
				
				if ($conn->query($sql)) {

					$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {{ $shopname=$row["username"]; ?>
					<?php	
				
				// Create connection
				$conn1 = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn1->connect_error) {
					die("Connection failed: " . $conn1->connect_error);
				}

				
				$sql1 = "SELECT * FROM $shopname where name='$name' ";
				
				
				if ($conn1->query($sql1)) {

					$result1= $conn1->query($sql1);

				if ($result1->num_rows > 0) {
					while($row1 = $result1->fetch_assoc()) {{?>
												
												var ad<?php echo $row1["name"]?><?php echo $row["id"]?>=parseInt(document.getElementById("oqty<?php echo $row1["name"]?><?php echo $row["id"]?>").value);
												var ae<?php echo $row1["name"]?><?php echo $row["id"]?>=parseInt(document.getElementById("price<?php echo $row1["name"]?><?php echo $row["id"]?>").value);
								 $("#<?php echo $row1["name"]?><?php echo $row["id"]?>").submit(function(e) {
									var url = "/asif/shop/shopdisc/proddesc/changecart.php"; // the script where you handle the form input.
									$.ajax({
											   type: "POST",
											   url: url,
											   data: $("#<?php echo $row1["name"]?><?php echo $row["id"]?>").serialize(), // serializes the form's elements.
											   success: function change(data)
											  {	var aa=".   Quantity-";
											    aa+=document.getElementById("qty<?php echo $row1["name"]?><?php echo $row["id"]?>").value;
												var ac<?php echo $row1["name"]?><?php echo $row["id"]?>=parseInt(document.getElementById("qty<?php echo $row1["name"]?><?php echo $row["id"]?>").value);
												ab-=ad<?php echo $row1["name"]?><?php echo $row["id"]?>*ae<?php echo $row1["name"]?><?php echo $row["id"]?>;
												ab+=ac<?php echo $row1["name"]?><?php echo $row["id"]?>*ae<?php echo $row1["name"]?><?php echo $row["id"]?>;
												var af="Total Payable<i class=\"fa fa-fw fa-inr\"></i>";
												af+=ab;
												ad<?php echo $row1["name"]?><?php echo $row["id"]?>=ac<?php echo $row1["name"]?><?php echo $row["id"]?>;
												document.getElementById("changeqtystatus<?php echo $row1["name"]?><?php echo $row["id"]?>").innerHTML = data;
												document.getElementById("updatedqty<?php echo $row1["name"]?><?php echo $row["id"]?>").innerHTML = aa;
												document.getElementById("totpay").innerHTML = af;
												$("#changeqty<?php echo $row1["name"]?><?php echo $row["id"]?>").trigger("reset");
											  }
										  });
									e.preventDefault(); // avoid to execute the actual submit of the form.
								});
								 $("#prodr<?php echo $row1["name"]?><?php echo $row["id"]?>").submit(function(e) {

								var url = "/asif/shop/shopdisc/proddesc/removecart.php"; // the script where you handle the form input.

								$.ajax({
									   type: "POST",
									   url: url,
									   data: $("#prodr<?php echo $row1["name"]?><?php echo $row["id"]?>").serialize(), // serializes the form's elements.
									   success: function change(data)
									  {document.getElementById("proddesc<?php echo $row1["name"]?><?php echo $row["id"]?>").innerHTML ="";
									   ab-=ad<?php echo $row1["name"]?><?php echo $row["id"]?>*ae<?php echo $row1["name"]?><?php echo $row["id"]?>;
									   if(ab)
									   {var af="Total Payable<i class=\"fa fa-fw fa-inr\"></i>";
										af+=ab;
									   document.getElementById("totpay").innerHTML = af;}
									   else{document.getElementById("totpaybox").innerHTML = "";
											document.getElementById("noprodbox").innerHTML = "no items in cart";}
										$('#prodr<?php echo $row1["name"]?><?php echo $row["id"]?>').trigger("reset");}
										
									 });

								e.preventDefault(); // avoid to execute the actual submit of the form.
							});
								<?php }}
							} else {
							echo "0 results";
							}
							} else {
							echo "Error creating table: " . $conn1->error;
							}

							$conn1->close();
							?>
    <!-- /.container -->
	<?php }}
							} else {
							echo "0 results";
							}
							} else {
							echo "Error creating table: " . $conn->error;
							}

							
							?>
							<?php }
							} else {
							echo "no items in cart";
							}
							} else {
							echo "Error creating table: " . $conn->error;
							}

							$conn->close();}
							?>
							</script>
							
		

</body>

</html>

