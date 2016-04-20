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
	
    <title>Gokochi Yellowpage</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <link href="css/shop-homepage.css" rel="stylesheet">

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

        </div>

    </nav>
	<form action="index.php" method="get" novalidate>
		<div class="row control-group container" style="margin-left:10%;padding-top:20px">
			<div class="form-group col-sm-10 floating-label-form-group controls">
				<input type="text" class="form-control" placeholder="Search for Services"  name="name" id="search_tag" >
			</div>
			<div class="col-sm-2">
				<button type="submit" class="btn btn-success "><i class="fa fa-fw fa-search"></i> Search</button>
			</div>
		</div>
	</form>

    <div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<?php error_reporting(0);
						$dbname = "yellowpage";
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
						$construct =" name LIKE '%$search_each%'";
						else
						$construct .="AND name LIKE '%$search_each%'";
						 
						}
						$x=0;
						foreach($search_exploded as $search_each)
						{
						$x++;
						if($x==1)
						$construct .=")OR (category LIKE '%$search_each%'";
						else
						$construct .="AND category LIKE '%$search_each%'";
						 
						}
						$sql = "SELECT DISTINCT `category`,catnum FROM `services` WHERE ($construct)";
						}else
						$sql = "SELECT DISTINCT `category`,catnum FROM `services` ";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {$catnum=$row["catnum"];?>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading<?php echo $row["catnum"]?>">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $row["catnum"]?>" aria-expanded="false" aria-controls="collapse<?php echo $row["catnum"]?>">
									<?php echo $row["category"]?>
									</a>
								</h4>
							</div>
							<div id="collapse<?php echo $row["catnum"]?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $row["catnum"]?>">
								<ul class="list-group"> 
									<?php
									if($_GET['name'])
									{
										
										$sql = "SELECT * FROM `services` where catnum=$catnum and ($construct)";
									}
									else $sql = "SELECT * FROM `services` where catnum=$catnum";
									$result1 = $conn->query($sql);
									if ($result1->num_rows > 0) {
									while($row1 = $result1->fetch_assoc()) {?>
									<li class="list-group-item ">
										<button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#exampleModal" data-name="<?php echo $row1["name"]?>" data-contact="<?php echo $row1["ph_no"]?>" data-email="<?php echo $row1["email"]?>" data-address="<?php echo $row1["address"]?>" data-category="<?php echo $row1["category"]?>" data-description="<?php echo $row1["description"]?>" data-latitude="<?php echo $row1["latitude"]?>" data-longtitude="<?php echo $row1["longtitude"]?>" data-id="<?php echo $row1["id"]?>">View
										</button><?php echo $row1["name"]?>
									</li> <?php }}?>
								</ul> 
							</div>
						</div><?php }}?>
					</div>
				</div>
			</div>
        </div>



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
    <script src="js/jquery.js"></script>
	
	<script type="text/javascript" >
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
		  var modal = $(this)
		  modal.find('.modal-title').text(name + " " + category)
		  modal.find('.modal-body #description').text("description: "+description)
		  modal.find('.modal-body #contact').text("contact: "+contact)
		  modal.find('.modal-body #address').text("address: "+address)
		  modal.find('.modal-body #email').text("email: "+email)
		  document.getElementById("map").innerHTML= "location: <iframe frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" width=\"100%\" height=\"300px\"  src=\"https://maps.google.com/maps?q="+latitude+","+longtitude+"&ie=UTF8&t=roadmap&z=12&iwloc=B&output=embed\"></iframe>"
		  document.getElementById("image").innerHTML="<img class=\"img-responsive\" src=\"getimg.php?id="+id+"\" alt=\"\">"
		  
		})
	</script>
    
    <script src="js/bootstrap.min.js"></script>
	

</body>

</html>
