<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

     <title>Festivals</title>

    
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
						 
						if(isset($_SESSION['user_name'])){$username=$_SESSION['user_name'];?>
                        <a href="../../php-login/index.php">Welcome <?php echo $username;?></a>
						<?php  } else{?>
                        <a href="../../php-login/index.php"><i class="fa fa-fw fa-sign-in"></i>Login</a><?php }?>
                    </li>
                    
                </ul>
            </div>
    
        </div>
    
    </nav>
	
    
    <div class="container">
		 <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Life And Arts in Kochi <br/>
				<br/>
                    <small>Experience the merry making festivals of Kochi!</small>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 portfolio-item text-center">
                <a data-toggle="modal" data-target="#exampleModal" data-name="Muziris Binale" data-image="img/tree.jpg"  data-description="A fallen tree in Vasscoda gama Square, Fort Kochi in Muziris Binale. The Kochi-Muziris Biennale is an international exhibition of contemporary art held in Kochi, Kerala. It is the first Biennale being held in India.[1] The Kochi-Muziris Biennale is an initiative of the Kochi-Biennale Foundation with support from the Government of Kerala . The exhibition was set in spaces across Kochi, Muziris and surrounding islands. The shows were held in existing galleries and halls, and site-specific installations in public spaces, heritage buildings and disused ">
					<img src="img/tree.jpg" style="width: 400px; height: 260px;" class="img-responsive" alt="">
					<h4>
						Muziris Binale
					</h4><br>
					
				</a>
            </div>
			<div class="col-md-4 portfolio-item text-center">
                <a data-toggle="modal" data-target="#exampleModal" data-name="Carnival Kochi" data-image="img/carnival.jpg"  data-description="The Kochi-Muziris Biennale is an international exhibition of contemporary art held in Kochi, Kerala. It is the first Biennale being held in India.[1] The Kochi-Muziris Biennale is an initiative of the Kochi-Biennale Foundation with support from the Government of Kerala .">
					<img src="img/carnival.jpg" style="width: 400px; height: 260px;" class="img-responsive" alt="">
					<h4>
						Carnival Kochi
					</h4><br>
				</a>
            </div>
            <div class="col-md-4 portfolio-item text-center">
                <a data-toggle="modal" data-target="#exampleModal" data-name="Hanukah Festival" data-image="img/hanukah.jpg"  data-description="The Menorah lights at Koder House, Fort Kochi, lit as part of the eight-day Hanukkah festival, also known as festival of lights, observed by Jews.">
					<img src="img/hanukah.jpg" style="width: 400px; height: 260px;" class="img-responsive" alt="">
					<h4>
						Hanukah Festival
					</h4><br>
				</a>
            </div>
			<div class="col-md-4 portfolio-item text-center">
                <a data-toggle="modal" data-target="#exampleModal" data-name="Famous Shiva Temple Festival" data-image="img/shivatemple.jpg"  data-description="Shiva Temple Festival (first week of January), takes place at the Shiva Temple and Durbar Hall Ground, famous for its ten elephant parade and host of cultural activities.">
					<img src="img/shivatemple.jpg" style="width: 400px; height: 260px;" class="img-responsive" alt="">
					<h4>
						Famous Shiva Temple Festival
					</h4><br>
				</a>
            </div>
            <div class="col-md-4 portfolio-item text-center">
                <a data-toggle="modal" data-target="#exampleModal" data-name="Onam Festival" data-image="img/boatrace.jpg"  data-description="Onam Festival (ten day festival from mid-August to mid-September). The state festival of Kerala originating in Kochi. It is based on the legend of welcoming home the mythical King Mahabali, whose capital was believed to be at the current site of Thrikakkara Temple.">
					<img src="img/boatrace.jpg" style="width: 400px; height: 260px;" class="img-responsive" alt="">
					<h4>
						Onam Festival
					</h4><br>
				</a>
            </div>
            <div class="col-md-4 portfolio-item text-center">
                <a data-toggle="modal" data-target="#exampleModal" data-name="Fireworks Festival of Maradu Kottaram Devi Temple" data-image="img/maradu.jpg"  data-description="(mid March – mid April), hosts India’s second largest fireworks as part of their temple festival finale. The festival takes place in the festival grounds of Maradu, which has mega fireworks display lasting for 1.5 hours on the last two days.">
					<img src="img/maradu.jpg" style="width: 400px; height: 260px;" class="img-responsive" alt="">
					<h4>
						Fireworks Festival of Maradu Kottaram Devi Temple
					</h4><br>
				</a>
            </div>
            <div class="col-md-4 portfolio-item text-center">
                <a data-toggle="modal" data-target="#exampleModal" data-name="Thripunithura Vrishikolsavam" data-image="img/poornathreyasya.jpg"  data-description="The temple is considered among the greatest temples in Kerala. The temple is famous for its yearly Utsavams or festivals. The main one is the Vrishchikoltsawam,[1] which is conducted every year in the month of Vrishchikam (November–December), kicking off the 'Ulsava' Season in Kerala. And this Vrishchikolsavam is the biggest temple festival of Ernakulam District and one of the biggest temple festivals of Kerala also.">
					<img src="img/poornathreyasya.jpg" style="width: 400px; height: 260px;" class="img-responsive" alt="">
					<h4>
						Thripunithura Vrishikolsavam
					</h4><br>
				</a>
            </div>
            <div class="col-md-4 portfolio-item text-center">
                <a data-toggle="modal" data-target="#exampleModal" data-name="Malayattor Perunnal" data-image="img/malayattor.jpg"  data-description="The festival of Malayatoor Perunnal is celebrated in the months of March/April every year. It falls on the Sunday after Easter and is organized at the world-famous Catholic Church at Malayatoor, situated near the Cochin city of Kerala. Situated atop the Malayattoor hill, at a height of some 609 m, this church is dedicated to the famous apostle of Jesus Christ, St Thomas.">
					<img src="img/malayattor.jpg" style="width: 400px; height: 260px;" class="img-responsive" alt="">
					<h4>
						Malayattor Perunnal
					</h4><br>
				</a>
            </div>
		</div>
		



		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="name"></h4>
			  </div>
			  <div class="modal-body">
				<div id="image"></div>
				
				<p id="description"></p>
				
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
	<script >
		$('#exampleModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var name = button.data('name')
		  var description = button.data('description')
		  var image = button.data('image')
		  var modal = $(this)
		  modal.find('.modal-title').text(name )
		  modal.find('.modal-body #description').text("description: "+description)
		  document.getElementById("image").innerHTML="<img class=\"img-responsive\" src=\""+image+"\" alt=\"\">"
		 })
	</script>
    
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
