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
    <link href="css/shop-item.css" rel="stylesheet">

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
                <a class="navbar-brand" href="http://127.0.0.1/asif"><i class="fa fa-spinner fa-pulse"></i>Gokochi</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="http://127.0.0.1/asif/about.php">About</a>
                    </li>
                    <li>
                        <a href="http://127.0.0.1/asif">Services</a>
                    </li>
                    <li>
                        <a href="http://127.0.0.1/asif">Contact</a>
                    </li>
                </ul>
				<ul class="nav navbar-nav pull-right">
					<li>
                        <a href="http://127.0.0.1/asif/php-login/index.php?flag=2"><i class="fa fa-fw fa-shopping-cart"></i>Cart</a>
                    </li>
                    <li>
                        <a href="http://127.0.0.1/asif/php-login/index.php"><i class="fa fa-fw fa-sign-in"></i>Login</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	<?php error_reporting(0);
$id='1';
if($_GET['id']!=null)
$id = $_GET['id'];
$name= $_GET['name'];
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

				if ($result1->num_rows > 0) {?>
					
					
					
	
								<form action="http://127.0.0.1/asif/shop/shopdisc/index.php?" method="get" novalidate>
								<div class="row control-group container" style="margin-left:10%;padding-top:20px">
									<div class="form-group col-sm-10 floating-label-form-group controls">
										<input type="hidden" name="id" value="<?php echo $row["id"]?>" />
										<input type="text" class="form-control" placeholder="search for products from <?php echo $row["username"]?>"  name="name" id="search_tag" required data-validation-required-message="search for products from <?php echo $row["username"]?>">
										<p class="help-block text-danger"></p>
									</div>
									<div class="col-sm-2">
										<button type="submit" class="btn btn-success btn-lg"><i class="fa fa-fw fa-shopping-bag"></i> Shop</button>
									</div>
								</div>
							
								
								<div id="success"></div>
							</form>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead"><?php echo $row["username"]?></p>
                <div class="list-group">
                    <a  href="http://127.0.0.1/asif/shop/shopdisc/index.php?name=<?php echo $name; ?>&id=<?php echo $row["id"]?>" class="list-group-item">all</a>
					<?php $sql2 = "SELECT DISTINCT `category` FROM `$shopname` ";
					if ($conn->query($sql2)) {
					$result2 = $conn->query($sql2);
					if ($result2->num_rows > 0) {
					while($row2 = $result2->fetch_assoc()) {?>
                    <a href="http://127.0.0.1/asif/shop/shopdisc/index.php?name=<?php echo $name;?>&id=<?php echo $row["id"]?>&category=<?php echo $row2["category"]?>" class="list-group-item"><?php echo $row2["category"]?></a>
					<?php }}}?>
                </div>
            </div>

            <div class="col-md-9">
				<?php while($row1 = $result1->fetch_assoc()) {{?>
                <div class="thumbnail">
                    <img class="img-responsive" src="getimg1.php?prodid=<?php echo $row1["prodid"]?>&name=<?php echo $row["username"]?>" alt="">
                    <div class="caption-full">
                        <h4 class="pull-right"><i class="fa fa-fw fa-inr"></i><?php echo $row1["price"]?></h4>
                        <h4><?php echo $row1["name"]?>
                        </h4>
						<h4><?php if(!$row1["stock"]){echo "out of stock";} ?></h4>
                        <p><?php echo $row1["company"]?> </p>
                        <p><?php echo $row1["description"]?></p>
                    </div>
                    <div class="ratings">
					<?php
						  $sql="SELECT COUNT(*) FROM `rivew` where id=$id and name='$name'  ";
						  $conn3 = new mysqli("localhost", "root","","asif");
						  $result3=$conn->query($sql); 
						  $row3 = $result3->fetch_assoc();
						  $count=$row3['COUNT(*)'];
						  $sql="SELECT * FROM `rivew` where id=$id and name='$name'  ";
						  $conn3 = new mysqli("localhost", "root","","asif");
						  $result3=$conn->query($sql); 
						  if ($result3->num_rows > 0) {$sum=0;
						  while($row3 = $result3->fetch_assoc()) {
							  
							  $sum=$sum+$row3['rating'];
							  
						  }$avg=$sum/$count;}
						  
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
                    <div style="height:150px">
					<?php $flag=$_GET['flag'];
							if($flag==1){?><p>Product added to cart</p><?php } 
							if($flag==2){?><p>Product already in cart</p><?php }
							if($flag==3){?><p>Product out of stock</p><?php }
							if($flag==4){?><p>Please input quantity</p><?php } ?>
					<form accept-charset="UTF-8" class="pull-right" action="http://127.0.0.1/asif/php-login/index.php?" method="get" >
									
									<input type="text" class="form-control" placeholder="input quantity" name="quantity" />
									<input type="hidden" name="flag" value="3" />
									<input type="hidden" name="name" value="<?php echo $name ?>" />
									<input type="hidden" name="id" value="<?php echo $id ?>" /><br>
									<button class="btn btn-success btn-lg pull-right"  type="submit"><i class="fa fa-fw fa-shopping-cart"></i>Add to cart</button>
									
								</form><br>
					</div></div>
                </div>

                <div class="well">

                    <div class="well-sm">
						<div class="text-right">
							<?php if($flag==5){?><p>Input rating or comment</p><?php } ?>
							<a class="btn btn-success btn-green" href="#reviews-anchor" id="open-review-box"><i class="fa fa-fw fa-book"></i>Leave a Review</a>
						</div>
					
						<div class="row" id="post-review-box" style="display:none;">
							<div class="col-md-12">
								<form accept-charset="UTF-8" action="http://127.0.0.1/asif/php-login/index.php? method="get">
								
									<input id="ratings-hidden" name="rating" type="hidden"> 
									<textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea>
									<input type="hidden" name="flag" value="1" />
									<input type="hidden" name="name" value="<?php echo $name ?>" />
									<input type="hidden" name="id" value="<?php echo $id ?>" />
									<div class="text-right">
										<div class="stars starrr" data-rating="0"></div>
										<a class="btn btn-danger btn-sm" href="#" id="close-review-box" style="display:none; margin-right: 10px;">
										<span class="glyphicon glyphicon-remove"></span>Cancel</a>
										<button class="btn btn-success btn-lg" type="submit"><i class="fa fa-fw fa-floppy-o"></i>Save</button>
									</div>
								</form>
							</div>
						</div>
					</div> 

                    
					<?php $sql="SELECT * FROM `rivew` where id=$id and name='$name'  ";
						  $conn3 = new mysqli("localhost", "root","","asif");
						  $result3=$conn->query($sql); 
						  

						if ($result3->num_rows > 0) {
							
							while($row3 = $result3->fetch_assoc()) {?>
					<hr>
                    <div class="row">
                        <div class="col-md-12">
						<?php $num = $row3['rating'];
						$num1=5;
						while($num>0){?>
						<span class="glyphicon glyphicon-star"></span><?php $num=$num-1;$num1=$num1-1;}
                         while($num1>0){?>
						<span class="glyphicon glyphicon-star-empty"></span><?php $num1=$num1-1;}?>   
                            
                            <?php echo $row3['username'];?>
                            <span class="pull-right"><?php echo date($row3['time']);?></span>
                            <p><?php echo $row3['comment'];?></p>
                        </div>
                    </div>

						<?php $conn3->close();}}?>

                </div>

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

							$conn->close();
							?>
    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Gokochi! 2016</p>
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
