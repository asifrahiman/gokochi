<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Go kochi!</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

</head>

<body id="page-top" class="index">

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
                <a class="navbar-brand" href="http://127.0.0.1/asif/"><i class="fa fa-spinner fa-pulse"></i>Go kochi!</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="http://127.0.0.1/asif/index.php">Services</a>
                    </li>
					
					<li class="page-scroll">
                        <a href="http://127.0.0.1/asif/about.php">About Kochi</a>
                    </li>
                    <li class="page-scroll">
                        <?php  session_start();
						 
						if(isset($_SESSION['user_name'])){$username=$_SESSION['user_name'];?>
                        <a href="http://127.0.0.1/asif/php-login/index.php">Welcome <?php echo $username;?></a>
						<?php  } else{?>
                        <a href="http://127.0.0.1/asif/php-login/index.php"><i class="fa fa-fw fa-sign-in"></i>Login</a><?php }?>
                    </li>
					<li class="page-scroll">
                        <a href="http://127.0.0.1/asif/index.php">Contact Us</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

   
    
    <!-- About Section -->
    <section class="success" id="about">
	
        <div class="container">
            <div class="row">
			    
                <div class="col-lg-12 text-center">
                    <br><br><h2>About Kochi</h2><hr class="star-light"><br>
                    
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
               <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="http://127.0.0.1/asif/" class="btn btn-lg btn-outline"><i class="fa fa-fw fa-arrow-left"></i> Back</a>
                </div> 
				

            </div>
        </div>
    </section>

    
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
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
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
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>


</body>

</html>
