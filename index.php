<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" type="image/png" href="img/fav/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/fav/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="img/fav/favicon-16x16.png" sizes="16x16">
	<title>Go kochi!</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body  id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top"><i><image src="img/favicon1.png" /></i>Go kochi!</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Services</a>
                    </li>
					
					<li class="page-scroll">
                        <a href="#about">About Kochi</a>
                    </li>
                    <li class="page-scroll">
                        <?php  session_start();
						 
						if(isset($_SESSION['user_name'])){$username=$_SESSION['user_name'];?>
                        <a href="php-login/index.php">Welcome <?php echo $username;?></a>
						<?php  } else{?>
                        <a href="php-login/index.php"><i class="fa fa-fw fa-sign-in"></i>Login</a><?php }?>
					</li>
					<li class="page-scroll">
                        <a href="#contact">Contact Us</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header style="background: transparent url(&quot;img/profile.jpg&quot;) no-repeat fixed center top / cover ;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="intro-text">
						
                        <span style="margin-top:290px;" class="name">Numma Kochi</span>
                        
                        <span class="skills">All you want in kochi</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
	
    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Services</h2>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cabin.png" class="img-responsive" alt="">
                    </a>
					<div class="portfolio-caption text-center">
                        <h4>Shopping</h4>
                        <p class="text-muted">Shopping Partner</p>
                    </div>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cake.png" class="img-responsive" alt="">
                    </a>
					<div class="portfolio-caption text-center">
                        <h4>Tourism</h4>
                        <p class="text-muted">Travel Guide</p>
                    </div>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/circus.png" class="img-responsive" alt="">
						
                    </a>
					<div class="portfolio-caption text-center">
                        <h4>Yellow Page</h4>
                        <p class="text-muted">Service Information</p>
                    </div>
                </div>
				
            </div>
        </div>
    </section>

    <section class="success" style="background-color:#18BC9C;" id="about">
	
        <div class="container">
            <div class="row">
			    
                <div class="col-lg-12 text-center">
                    <br><br><h2>About Kochi</h2><br>
                </div>
				<img class="img-responsive" src="img/about.jpg" alt="">
            </div>
            <div class="row"style="text-align:center;">
                <div class="col-lg-12  " style="text-align:center;">
					<b><br><p>Introduction</p><br>
				</div><br>
				<div class="col-lg-12 col-lg-offset-2" style="text-align:left;">
                    <ol>Area: 94.88 km²</ol>
					<ol>Population: 595,575</ol>
					<ol>Government body: Cochin Municipal Corporation</ol>
					<ol>Number of airports: 1</ol><br></b>
				</div>
				
				<div class="col-lg-4 col-lg-offset-2" style="text-align:left;">
				<p>	Kochi
					City in India
					Kochi is a city in southwest India's coastal Kerala state. It has been a port since 1341, when a flood carved out its harbor and opened it to Arab, Chinese and European merchants. Sites reflecting those influences include Fort Kochi, a settlement with tiled colonial bungalows and diverse houses of worship. Its use of cantilevered Chinese fishing nets dates to the 13th century.
				   
					ancient travellers and tradesmen referred to Kochi in their writings, variously alluding to it as Cocym, Cochym, Cochin, and Kochi. The Cochin Jewish community called Cochin as Kogin (קוגין), which is seen in the seal of the synagogue which is still owned by the community.</p>
				</div>
				<div class="col-lg-4" style="text-align:left;">	 <p>The origin of the name "Kochi" is thought to be from the Malayalam word kochu azhi, meaning 'small lagoon'. Yet another theory is that Kochi is derived from the word Kaci meaning 'harbour'.Accounts by Italian explorers Nicolo Conti (15th century), and Fra Paoline in the 17th century say that it was called Kochchi, named after the river connecting the backwaters to the sea. After the arrival of the Portuguese, and later the British, the name Cochin stuck as the official appellation. The city reverted to a closer Anglicization of its original Malayalam name, Kochi, in 1996. This change in name was challenged by the city municipal corporation and officially, the city is still called "Cochin" ( Corporation of Cochin ).</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2"style="text-align:left;">
                    <p>Kochi was the centre of Indian spice trade for many centuries, and was known to the Yavanas (Greeks and Romans) as well as Jews, Syrians, Arabs, and Chinese since ancient times. Kochi rose to significance as a trading centre after the port Muziris around Kodungallur (Cranganore) was destroyed by massive flooding of Periyar in 1341. The earliest documented references to Kochi occur in books written by Chinese voyager Ma Huan during his visit to Kochi in the 15th century as part of Admiral Zheng He's treasure fleet. There are also references to Kochi in accounts written by Italian traveller Niccolò Da Conti, who visited Kochi in 1440.<br>                                                                                                                        </p>
				</div>
				<div class="col-lg-4 "style="text-align:left;">
					<p>According to many historians, the precursor state to Kingdom of Kochi came into existence in early 12th century, after the fall of the Chera Kingdom. The reign of the Kingdom was hereditary, and the family that ruled over the region was known as the Perumpadappu rulers in the local vernacular. The mainland Kochi remained the capital of the princely state since the 18th century. The King of Kochi only had authority over the region encompassing the present city of Kochi and adjoining areas. However, during much of this time, the kingdom was under foreign suzerainty, and the King often only had titular privileges.</p>
				</div>
				<div class="col-lg-8 col-lg-offset-2"style="text-align:left;">
					<p>Portuguese navigator, Pedro Álvares Cabral founded the first European settlement in India at Kochi in 1500. From 1503 to 1663, Fort Kochi (Fort Emmanuel) was ruled by Portugal. This Portuguese period was a harrowing time for the Saint Thomas Christians and the Jews, as the Inquisition was active in Portuguese India. Kochi hosted the grave of Vasco da Gama, the first European explorer to set sail for India, who was buried at St. Francis Church until his remains were returned to Portugal in 1539.The Portuguese rule was followed by that of the Dutch, who had allied with the Zamorin of Calicut to conquer Kochi. By 1773, the Mysore ruler Hyder Ali extended his conquest in the Malabar region to Kochi forcing it to become a tributary of Mysore. The hereditary Prime Ministership of Kochi held by the Paliath Achans ended during this period.</p>
  
				</div> 
			</div>
        </div>
        
    </section>
    <!-- Contact Section -->
    <section style="background: rgb(68, 157, 68) url(&quot;img/map-image.png&quot;) no-repeat fixed center top / cover;" id="contact">
        <div class="container">
            <div class="row">
                <div style="color: rgb(255, 255, 255);" class="col-lg-12 text-center">
                    <h2>Contact Us</h2>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" action="mail/contact_me.php" id="contactForm" novalidate="">
                        <div class="row control-group">
							<span class="input-group-addon"><i class="fa fa-child fa-fw"></i></span>
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <input aria-invalid="false" class="form-control" placeholder="Name" id="name" required="" data-validation-required-message="Please enter your name." type="text">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
							<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
							<div class="form-group col-xs-12 floating-label-form-group controls">
                                <input aria-invalid="false" class="form-control" placeholder="Email Address" id="email" required="" data-validation-required-message="Please enter your email address." type="email">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
							<span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <input class="form-control" placeholder="Phone Number" id="phone" required="" data-validation-required-message="Please enter your phone number." type="tel">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
							<span class="input-group-addon"><i class="fa fa-file-text-o fa-fw"></i></span>
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <textarea rows="2" class="form-control" placeholder="Message" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg"><i class="fa fa-send-o fa-fw"></i> Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
		
    </section>
	<div class="portfolio-modal modal fade" style="background-color: white;" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-align=centre;">
                        <div class="modal-body">
                            <h2>Tour Around Kochi</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cake.png" class="img-responsive img-centered" alt="">
                            <p>Get information about various tourist hotspots in kochi.<br> <a href="#page-top">Go Kochi!</a> Choose the places to visit during your visit to kochi </p>
                        </div>
                    	<br>
							<form action="travel/index.php" method="get" style="margin-top:100px;margin-bottom:-0px;"  novalidate>
								<div class="row control-group"  width=100% style="margin-left:0px; margin-right:0px;">
									<div class="form-group col-md-10 floating-label-form-group controls">
										<input type="search" class="form-control" placeholder="Search for tourist destinations"  name="name" id="search_tag" required data-validation-required-message="search for a tourist destination">
										<p class="help-block text-danger"></p>
									</div>
									<div class="col-md-2">
										<button type="submit" style="margin-top:0px;" class="btn btn-success btn-lg"><i class="fa fa-fw fa-map-marker"></i> search</button>
									</div>
								</div>
								<br>
							</form>
						</div>	
					</div>
                </div>
            </div>
        </div>
    </div>
	<div class="portfolio-modal modal fade" style="background-color: white;" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-align=centre;">
                        <div class="modal-body">
                            <h2>Shopping</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>Shop anywhere in kochi from your home.<br> <a href="#page-top">Go Kochi!</a><br> Here you can shop at the shops around kochi from your home! <br> *Delivery charges apply </p>
                            <br>
							<form action="shop/index.php" method="get" style="margin-top:100px;margin-bottom:-0px;" >
								<div class="row control-group"  >
									<div class="form-group col-md-10 floating-label-form-group ">
										<input type="search" class="form-control" placeholder="Search for Shops,Products"  name="name" >
									</div>
									<div class="col-md-2">
										<button type="submit"  class="btn btn-success btn-lg"><i class="fa fa-fw fa-shopping-bag"></i> Shop</button>
									</div>
								</div>
								<br>
							</form>
						</div>	
					</div>
                </div>
            </div>
        </div>
    </div>
	<div class="portfolio-modal modal fade" style="background-color: white;" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-align=centre;">
                        <div class="modal-body">
                            <h2>Kochi Yellow Pages</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/circus.png" class="img-responsive img-centered" alt="">
                            <p>Get information about various services available in kochi.<br> <a href="#page-top">Go Kochi!</a></p>
                            
						</div>
                    	<br>
						<form action="yellowpage/index.php" method="get" style="margin-top:100px;margin-bottom:-0px;"  novalidate>
							<div class="row control-group"  width=100% style="margin-left:0px; margin-right:0px;">
								<div class="form-group col-md-10 floating-label-form-group controls">
									<input type="search" class="form-control" placeholder="Search for Services"  name="name" id="search_tag" required data-validation-required-message="Enter a shop name, shop type, shop item">
								</div>
								<div class="col-md-2">
									<button type="submit" style="margin-top:0px;" class="btn btn-success btn-lg"><i class="fa fa-fw fa-search"></i> Search</button>
								</div>
							</div>
						</form>	
					</div>
                </div>
            </div>
        </div>
    </div>
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
                        <li><a style="color: white;" href="#">Privacy Policy</a>
                        </li>
                        <li><a style="color: white;" href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
					
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll ">
        <a class="btn btn-primary" style="border-color: rgb(29, 102, 97);" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

   
    
	<script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <!script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>
</body>

</html>
