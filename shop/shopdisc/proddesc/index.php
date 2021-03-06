<!DOCTYPE html>
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

    
    <link href="css/shop-item.css" rel="stylesheet">
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
                <a class="navbar-brand" href="../"><i class="fa fa-spinner fa-pulse"></i>Gokochi</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../../../">About Kochi</a>
                    </li>
                    <li>
                        <a href="../../../">Services</a>
                    </li>
                    <li>
                        <a href="../../../">Contact Us</a>
                    </li>
                </ul>
				<ul class="nav navbar-nav pull-right">
					<li>
                        <a href="showcart.php"><i class="fa fa-fw fa-shopping-cart"></i>Cart</a>
                    </li>
                    <li>
                        <?php  session_start();
						 
						if(isset($_SESSION['user_name'])){$username=$_SESSION['user_name'];?>
                        <a href="../../../php-login/index.php">Welcome <?php echo $username;?></a>
						<?php  } else{?>
                        <a href="../../../php-login/index.php"><i class="fa fa-fw fa-sign-in"></i>Login</a><?php }?>
                    </li>
                    
                </ul>
            </div>

        </div>

    </nav>
	<?php error_reporting(0);
$id='1';
if($_GET['id']!=null)
$id = $_GET['id'];
$name= $_GET['name'];
			
				?>
					
	<div id="wrapper">


        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a>Categories
                    </a>
                </li>
                <li>
                    <a  href="../index.php?id=<?php echo $row["shop_id"]?>" >all</a>
                </li>
                <li>
                    <?php $sql2 = "SELECT DISTINCT `category` FROM `products` where shop_id=$id";
					$dbname = "shops";
					$conn = new mysqli("localhost", "asif","asif", $dbname);
					if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
					}
					if ($conn->query($sql2)) {
					$result2 = $conn->query($sql2);
					if ($result2->num_rows > 0) {
					while($row2 = $result2->fetch_assoc()) {?>
                    <a href="../index.php?id=<?php echo $row["shop_id"]?>&category=<?php echo $row2["category"]?>"><?php echo $row2["category"]?></a>
					<?php }}}?>
                </li>
				
                
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">				
							<?php 
						$sql = "SELECT * FROM `products`,shops where products.shop_id=shops.shop_id and products.shop_id=$id and name='$name'";
				
				
						if ($conn->query($sql)) {

							$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							?>
	
								<form action="../index.php?" method="get" novalidate>
								<div class="row control-group" style="margin-left:10%;padding-top:20px">
									<div class="form-group col-sm-10 floating-label-form-group controls">
										<input type="hidden" name="id" value="<?php echo $row["id"]?>" />
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
						</div>

				<div class="row">

					

					<div class="col-md-6">
						<?php 
						while($row = $result->fetch_assoc()) {{?>
						<h4><?php echo $row["shop_name"]?></p></h4>
						<div class="thumbnail">
						
							<img class="img-responsive" src="getimg1.php?name=<?php echo $row["name"]?>&id=<?php echo $row["shop_id"]?>" alt="">
							<div class="caption-full">
								<h4 class="pull-right"><i class="fa fa-fw fa-inr"></i><?php echo $row["price"]?></h4>
								<h4><?php echo $row["name"]?>
								</h4>
								<h4><?php if(!$row["stock"]){echo "out of stock";} ?></h4>
								<p><?php echo $row["company"]?> </p>
								<p><?php echo $row["product_details"]?></p>
							</div>
							<div class="ratings">
							<?php
								  $sql="SELECT COUNT(*) FROM `rivew` where id=$id and name='$name'  ";
								  
								  $result3=$conn->query($sql); 
								  $row3 = $result3->fetch_assoc();
								  $count=$row3['COUNT(*)'];
								  $sql="SELECT * FROM `rivew` where id=$id and name='$name'";
								  $conn3 = new mysqli("localhost", "root","","asif");
								  $result3=$conn->query($sql); 
								  if ($result3->num_rows > 0) {$sum=0;
								  while($row3 = $result3->fetch_assoc()) {
									  
									  $sum=$sum+$row3['rating'];
									  
								  }$avg=$sum/$count;}
								  
								  $conn3->close();
								 ?>
								<p class="pull-right" id="dispcount"><?php echo $count ?> reviews</p>
								<p id="ratstar">
									<?php $num = round($avg);
								$num1=5;
								while($num>=1){?>
								<span class="glyphicon glyphicon-star"></span><?php $num=$num-1;$num1=$num1-1;}
								 while($num1>0){?>
								<span class="glyphicon glyphicon-star-empty"></span><?php $num1=$num1-1;}?>   
								  <?php echo round($avg); ?> stars
								</p>
							<div style="height:110px">
							
							<form accept-charset="UTF-8" class="pull-right" id="addcart" method="get" >
											
											<input type="number" class="form-control" placeholder="input quantity" name="quantity" />
											<input type="hidden" name="flag" value="3" />
											<input type="hidden" name="name" value="<?php echo $name ?>" />
											<input type="hidden" name="id" value="<?php echo $id ?>" /><br>
											<button class="btn btn-success pull-right"  type="submit"><i class="fa fa-fw fa-shopping-cart"></i>Add to cart</button>
											
										</form><br>
										<p id="addcartstatus"></p>
							</div></div>
						</div>
					</div>
					<div class="col-md-6" style="margin-top:40px">
						<div class="well">

							<div class="well-sm">
								<div class="text-right">
									<p id="reviewmsg"></p>
									<a class="btn btn-success btn-green" href="#reviews-anchor" id="open-review-box"><i class="fa fa-fw fa-book"></i>Leave a Review</a>
								</div>
							
								<div class="row" id="post-review-box" style="display:none;">
									<div class="col-md-12">
										<form accept-charset="UTF-8" id="submitreview"  method="post">
										
											<input id="ratings-hidden" name="rating" type="hidden"> 
											<input class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." type="text" rows="5">
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

							<div id="review-box">
									
									<?php $sql="SELECT * FROM `rivew` where id=$id and name='$name'  ORDER BY `time` DESC  ";
										  
										  $result3=$conn->query($sql); 
										  

										if ($result3->num_rows > 0) {
											
											while($row3 = $result3->fetch_assoc()) {?>
									<hr>
									<div class="row" >
										<div class="col-md-12" >
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

									<?php }}?>
							</div>
						</div>

					</div>

				

			</div>
									
			<?php }}
									} else {
									echo "0 results";
									}
									} else {
									echo "Error creating table: " . $conn->error;
									}

									$conn->close();
									$username=$_SESSION['user_name']; 
									?>
	
	
    <div class="container">

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

    </div></div></div></div>
    <script src="js/jquery.js"></script>


    <script src="js/bootstrap.min.js"></script>
	 <script type="text/javascript">
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
	 <script type="text/javascript">
	 $("#addcart").submit(function(e) {

    var url = "addcart.php"; 

    $.ajax({
           type: "POST",
           url: url,
           data: $("#addcart").serialize(), 
           success: function change(data)
          {document.getElementById("addcartstatus").innerHTML = data;
		   
			$('#addcart').trigger("reset");}
			
         });

    e.preventDefault();
});
</script>
<script type="text/javascript">
        if(parseInt(<?php echo $count; ?>))
		var cou =parseInt(<?php echo $count; ?>);
		else 
		var cou=parseInt(0);
		if(parseInt(<?php echo $count; ?>))
		var su = parseInt(<?php echo $sum; ?>);
		else 
		var su=parseInt(0);
	    
		var avg=parseInt(0);
	 $("#submitreview").submit(function(e) {

    var url = "insertrivew.php"; 

    $.ajax({
           type: "POST",
           url: url,
           data: $("#submitreview").serialize(),
           success: function change(data)
          {document.getElementById("reviewmsg").innerHTML = data;
		   
			
			if(data=="review inserted")
			{
			var qwe = "<hr><div class=\"row\" ><div class=\"col-md-12\">";
			
			var cc = 0;
			if(parseInt(document.getElementById("ratings-hidden").value))
				cc=parseInt(document.getElementById("ratings-hidden").value);
			
			cou+=1;
			
			su=parseInt(su)+parseInt(cc);
			avg=parseInt(su)/parseInt(cou);
			avg=Math.round(avg);
			var vv = document.getElementById("new-review").value;
			for(var i=0;i<cc;++i)
				qwe += "<span class=\"glyphicon glyphicon-star\" style=\"padding-right: 4px;\"></span>";
			for(var i=cc;i<5;++i)
				qwe += "<span class=\"glyphicon glyphicon-star-empty\" style=\"padding-right: 4px;\"></span>";
			
			qwe += "<?php echo $username; ?> <span class=\"pull-right\">Now</span><p>";
			qwe += vv;
			qwe += "</p></div></div>"
			
			$("#review-box").prepend(qwe);
			document.getElementById("dispcount").innerHTML = cou +' reviews';
			var red="";
			for(var i=0;i<avg;++i)
				red += "<span class=\"glyphicon glyphicon-star\" style=\"padding-right: 4px;\"></span>";
			for(;i<5;++i)
				red += "<span class=\"glyphicon glyphicon-star-empty\" style=\"padding-right: 4px;\"></span>";
			    red += avg;
				red +=" stars</p>";
				document.getElementById("ratstar").innerHTML = red;
			
			$('#submitreview').trigger("reset");
		  }}
			
         });

    e.preventDefault(); 
});
</script>

</body>

</html>
