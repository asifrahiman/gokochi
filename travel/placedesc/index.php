<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gokochi Travel</title>

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
                <a class="navbar-brand" href="../../"><i class="fa fa-spinner fa-pulse"></i>Gokochi</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
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
                        <a href="../../php-login/index.php"></i>Welcome <?php echo $username;?></a>
						<?php  } else{?>
                        <a href="../../php-login/index.php"><i class="fa fa-fw fa-sign-in"></i>Login</a><?php }?>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
							<form action="../index.php" method="get" novalidate>
								<div class="row control-group container" style="margin-left:10%;padding-top:20px">
									<div class="form-group col-sm-10 floating-label-form-group controls">
										<input type="text" class="form-control" placeholder="Search for Tourist destinations"  name="name" id="search_tag" required data-validation-required-message="Enter a tourist destination">
										<p class="help-block text-danger"></p>
									</div>
									<div class="col-sm-2">
										<button type="submit" class="btn btn-success btn-lg"><i class="fa fa-fw fa-shopping-bag"></i>Travel</button>
									</div>
								</div>
							
							</form>
    <!-- Page Content -->
    <div class="container">

        <div class="row">
			<div class="col-md-6">
				<?php error_reporting(0);
								$flag = $_GET['flag'];
								$key1 = $_GET['key1'];
								 $conn = new mysqli("gokochi.cloudapp.net", "root","g0k0chi@123","travel");
								$sql = "SELECT * FROM `tourism` where key1=$key1";
								$result = $conn->query($sql);
								
								$row = $result->fetch_assoc()?>
                <div class="thumbnail">
                    <img class="img-responsive" src="getimg.php?id=<?php echo $row["key1"]?>" alt="">
                    <div class="caption-full">
                       
                        <h4><?php echo $row["name"]?>
                        </h4>
						
                        <p><?php echo $row["description"]?></p>
                    </div>
                    <div class="ratings">
					<?php
						  $sql="SELECT COUNT(*) FROM `rivew` where id=$key1";
						  
						  $result3=$conn->query($sql); 
						  $row3 = $result3->fetch_assoc();
						  $count=$row3['COUNT(*)'];
						  $sql="SELECT * FROM `rivew` where id=$key1 ";
						 
						  $result3=$conn->query($sql); 
						  if ($result3->num_rows > 0) {$sum=0;
						  while($row3 = $result3->fetch_assoc()) {
							  
							  $sum=$sum+$row3['rating'];
							  
						  }$avg=$sum/$count;}
						  
						  $conn3->close();?>
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
                    </div>
                </div>

                <div class="well">

                    <div class="well-sm">
						<div class="text-right">
							<p id="reviewmsg"></p>
							<a class="btn btn-success btn-green" href="#reviews-anchor" id="open-review-box"><i class="fa fa-fw fa-book"></i>Leave a Review</a>
						</div>
					
						<div class="row" id="post-review-box" style="display:none;">
							<div class="col-md-12">
								<form accept-charset="UTF-8"  id="submitreview">
									<input id="ratings-hidden" name="rating" type="hidden"> 
									<input class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." type="text" rows="5">
									
									<input type="hidden" name="id" value="<?php echo $key1 ?>" />
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
					<?php $sql="SELECT * FROM `rivew` where id=$key1 ORDER BY `time` DESC  ";
						  
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
			<div class="col-md-6">
			<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="100%" height="300px"  src="https://maps.google.com/maps?q=<?php echo $row["lattitude"]?>,<?php echo $row["longitude"]?>&ie=UTF8&t=roadmap&z=12&iwloc=B&output=embed"></iframe>
			</div>
        </div>

    </div>
							
	<?php 
							$conn->close();
							?>
    <div class="container">

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

    var url = "/asif/travel/placedesc/insertrivew.php"; // the script where you handle the form input.

    $.ajax({
           type: "POST",
           url: url,
           data: $("#submitreview").serialize(), // serializes the form's elements.
           success: function change(data)
          {document.getElementById("reviewmsg").innerHTML = data;
		   
			
			if(data=="review inserted")
			{var qwe = "<hr><div class=\"row\" ><div class=\"col-md-12\">";
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
			//$("#ratstar").replaceWith(red);
			$('#submitreview').trigger("reset");
		  }}
			
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});
</script>v

</body>

</html>
