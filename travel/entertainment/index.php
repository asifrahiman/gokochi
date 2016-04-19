<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

     <title>Entertainment</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
	<link href="css/simple-sidebar.css" rel="stylesheet">

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
						 error_reporting(0);
						if(isset($_SESSION['user_name'])){$username=$_SESSION['user_name'];?>
                        <a href="../../php-login/index.php">Welcome <?php echo $username;?></a>
						<?php  } else{?>
                        <a href="../../php-login/index.php"><i class="fa fa-fw fa-sign-in"></i>Login</a><?php }?>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a>Categories
                    </a>
                </li>
                <li>
                    <a  href="index.php" >all</a>
                </li>
                
                    <?php
					$dbname = "travel";								
					$conn = new mysqli("localhost", "asif","asif", $dbname);
					$sql2 = "SELECT DISTINCT `category` FROM `entmnt` ORDER BY `category` ASC ";
					if ($conn->query($sql2)) {
					$result2 = $conn->query($sql2);
					if ($result2->num_rows > 0) {
					while($row2 = $result2->fetch_assoc()) {?>
					<li>
                    <a href="index.php?cat=<?php echo $row2["category"]?>"><?php echo $row2["category"]?></a>
					</li>
					<?php }}}?>
                
				
                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
			<a href="#menu-toggle" class="btn btn-success" id="menu-toggle">Toggle Categories</a><br>
		 <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Fun and Entertainment in Kochi </h1>
            </div>
        </div>
        <!-- /.row -->
<!-- Projects Row -->
        
			<?php 
			if(!$_GET['cat']){
			$sql = "SELECT DISTINCT `category` FROM `entmnt`ORDER BY `category` ASC ";}
			else
			{$cat=$_GET['cat'];
			$sql = "SELECT DISTINCT `category` FROM `entmnt` where category='$cat' ";}
			$result1 = $conn->query($sql);
			while($row1 = $result1->fetch_assoc()){$cat=$row1["category"];?>
			<h2 class="page-header"><?php echo $cat?></h2>
			<div class="row">
			<?php
			$sql = "SELECT * FROM `entmnt` where category='$cat' ";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()){?>
            <div class="col-md-4 portfolio-item text-center">
                <a data-toggle="modal" data-target="#exampleModal" data-name="<?php echo $row["name"]?>"  data-category="<?php echo $row["category"]?>" data-description="<?php echo $row["description"]?>" data-latitude="<?php echo $row["lattitude"]?>" data-longtitude="<?php echo $row["longtitude"]?>" data-id="<?php echo $row["id"]?>">
					<img src="getimg.php?id=<?php echo $row["id"]?>" style="width: 400px; height: 260px;" class="img-responsive" alt="">
					<h4>
						<?php echo $row["name"]?>
					</h4><br>
					
				</a>
            </div>
			<?php }?>
			</div>
			<?php }
			$conn->close();
			?>
		
		



		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		  <div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="name"></h4>
			  </div>
			  <div class="modal-body">
				<div id="image"></div>
				<p id="address"></p>
				<p class="pull-right" id="contact"></p>
				<p id="email"></p>
				<p id="description"></p>
				<div id="map"></div>
				
			  </div>
			</div>
		  </div>
		</div>
          

            

       
    </div>
	</div>
	
    <!-- /.container -->

    <div class="container">

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
	<script >
		$('#exampleModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var name = button.data('name')
		  var description = button.data('description')
		  var category = button.data('category')
		  var address = button.data('address')
		  var email = button.data('email')
		  var contact = button.data('contact')
		  var id = button.data('id')
		  var latitude = button.data('latitude')
		  var longtitude = button.data('longtitude')
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		  var modal = $(this)
		  modal.find('.modal-title').text(name + " " + category)
		  modal.find('.modal-body #description').text("description: "+description)
		  
		  document.getElementById("map").innerHTML= "location: <iframe frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" width=\"100%\" height=\"300px\"  src=\"https://maps.google.com/maps?q="+latitude+","+longtitude+"&ie=UTF8&t=roadmap&z=12&iwloc=B&output=embed\"></iframe>"
		  document.getElementById("image").innerHTML="<img class=\"img-responsive\" src=\"getimg.php?id="+id+"\" alt=\"\">"
		  
		})
	</script>
	<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
