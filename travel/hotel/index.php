<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Restaurants And Art Cafe's</title>

   
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
   
    <link href="css/agency.css" rel="stylesheet">

   
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
						 error_reporting(0);
						if(isset($_SESSION['user_name'])){$username=$_SESSION['user_name'];?>
                        <a href="../../php-login/index.php">Welcome <?php echo $username;?></a>
						<?php  } else{?>
                        <a href="../../php-login/index.php"><i class="fa fa-fw fa-sign-in"></i>Login</a><?php }?>
                    </li>
                    
                </ul>
            </div>
            
        </div>
    
    </nav>
    
	</br>
	</br>
	<div class="container">
	
        <div class="row">
            <div class="col-md-6">
                <h1 class="page-header"> Hotels, Restaurants & Art Cafes
				    
                </h1>
            </div>
        </div>
	
		   <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading" >Happiness And Food!</h2>
				</div>
            </div>
        </div>
    </section>
	</br>
	<form action="index.php" method="get" novalidate>
		<div class="row control-group container" style="margin-left:5%;padding-top:20px">
			<div class="form-group col-sm-10 floating-label-form-group controls">
				<input type="text" class="form-control" placeholder="Search for restaurants and hotels"  name="name" id="search_tag" >
			</div>
			<div class="col-sm-2">
				<button type="submit" class="btn btn-success "><i class="fa fa-fw fa-search"></i> Search</button>
			</div>
		</div>
	</form>

	
</br>

		<div class="container">
			<div class="row">
		 
				<?php 
					$dbname = "travel";
					$conn = new mysqli("localhost", "asif","asif", $dbname);
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
							$sql = "SELECT * FROM `h&r` where $construct";
							}
					else		
					$sql = "SELECT * FROM `h&r` ";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc()){?>
					<div class="col-sm-4 col-lg-4 col-md-4">
						<a data-toggle="modal" data-target="#exampleModal" data-name="<?php echo $row["name"]?>" data-description="<?php echo $row["description"]?>" data-latitude="<?php echo $row["latitude"]?>" data-longtitude="<?php echo $row["longitude"]?>" data-id="<?php echo $row["shop_id"]?>">
							<img class="img-responsive" style="width: 400px; height: 260px;" src="getimg.php?id=<?php echo $row["shop_id"]?>" alt="">
							<div class="caption-full">
								<h4><?php echo $row["name"]?>
								</h4>
						</a>
								<p><?php echo $row["description"]?></p>
							</div>
						
					</div>
					
				<?php 
					}$conn->close();
				?>
	
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
        <hr>


        
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
		  modal.find('.modal-title').text(name )
		  modal.find('.modal-body #description').text("description: "+description)
		 
		  document.getElementById("map").innerHTML= "location: <iframe frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" width=\"100%\" height=\"300px\"  src=\"https://maps.google.com/maps?q="+latitude+","+longtitude+"&ie=UTF8&t=roadmap&z=12&iwloc=B&output=embed\"></iframe>"
		  document.getElementById("image").innerHTML="<img class=\"img-responsive\" src=\"getimg.php?id="+id+"\" alt=\"\">"
		  
		})
	</script>

    
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
