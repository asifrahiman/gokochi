<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Festivals</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- Custom CSS -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">

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
    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Life And Arts in Kochi <br/>
				<br/>
                    <small>Experience the merry making festivals of Kochi!</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
<!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a>
                    <img src="img/tree.jpg" style="width: 400px; height: 260px;" class="img-responsive" alt="">
 
                </a>
                <h3>
                    <a href="#">Muziris Binale</a>
                </h3>
                <p>A fallen tree in Vasscoda gama Square, Fort Kochi in Muziris Binale. The Kochi-Muziris Biennale is an international exhibition of contemporary art held in Kochi, Kerala. It is the first Biennale being held in India.[1] The Kochi-Muziris Biennale is an initiative of the Kochi-Biennale Foundation with support from the Government of Kerala . The exhibition was set in spaces across Kochi, Muziris and surrounding islands. The shows were held in existing galleries and halls, and site-specific installations in public spaces, heritage buildings and disused </p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img src="img/carnival.jpg" style="width: 400px; height: 260px;" class="img-responsive" alt="">
                </a>
                <h3>
                    <a href="#">Carnival Kochi</a>
                </h3>
                <p>The Kochi-Muziris Biennale is an international exhibition of contemporary art held in Kochi, Kerala. It is the first Biennale being held in India.[1] The Kochi-Muziris Biennale is an initiative of the Kochi-Biennale Foundation with support from the Government of Kerala .</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
						<img src="img/hanukah.jpg" style="width: 400px; height: 260px;" class="img-responsive" alt="">
                </a>
                <h3>
                    <a href="#">Hanukah Festival</a>
                </h3>
                <p> The Menorah lights at Koder House, Fort Kochi, lit as part of the eight-day Hanukkah festival, also known as festival of lights, observed by Jews.</p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="#">
                 <img src="img/shivatemple.jpg" style="width: 400px; height: 260px;" class="img-responsive" alt="">   
                </a>
                <h3>
                    <a href="#">Famous Shiva Temple Festival</a>
                </h3>
                <p>Shiva Temple Festival (first week of January), takes place at the Shiva Temple and Durbar Hall Ground, famous for its ten elephant parade and host of cultural activities. </p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                   <img src="img/boatrace.jpg" style="width: 400px; height: 260px;" class="img-responsive" alt="">     
                </a>
                <h3>
                    <a href="#">Onam Festival</a>
                </h3>
                <p>Onam Festival (ten day festival from mid-August to mid-September). The state festival of Kerala originating in Kochi. It is based on the legend of welcoming home the mythical King Mahabali, whose capital was believed to be at the current site of Thrikakkara Temple. </p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                   <img src="img/maradu.jpg" style="width: 400px; height: 260px;" class="img-responsive" alt="">     
                </a>
                <h3>
                    <a href="#">Fireworks Festival of Maradu Kottaram Devi Temple</a>
                </h3>
                <p>(mid March – mid April), hosts India’s second largest fireworks as part of their temple festival finale. The festival takes place in the festival grounds of Maradu, which has mega fireworks display lasting for 1.5 hours on the last two days.</p>
            </div>
        </div>

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="#">
                 <img src="img/poornathreyasya.jpg" style="width: 400px; height: 260px;" class="img-responsive" alt="">       
                </a>
                <h3>
                    <a href="#">Thripunithura Vrishikolsavam </a>
                </h3>
                <p>The temple is considered among the greatest temples in Kerala. The temple is famous for its yearly Utsavams or festivals. The main one is the Vrishchikoltsawam,[1] which is conducted every year in the month of Vrishchikam (November–December), kicking off the 'Ulsava' Season in Kerala. And this Vrishchikolsavam is the biggest temple festival of Ernakulam District and one of the biggest temple festivals of Kerala also.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                   <img src="img/cycling-tour.jpg" style="width: 400px; height: 260px;" class="img-responsive" alt="">        
                </a>
                <h3>
                    <a href="#">Cycling Tour in Kochi</a>
                </h3>
                <p>On your most exciting cycling trips in Kochi watch markets and fish auctions along the beach and the many boats just leaving to return with a great catch. Kochini women clad in their ‘chatteyum mundum’ (Christian women attire : white n white) stroll to church for their early morning prayers. Fishmongers, milkmen, school kids and toddy tappers bi-cycle alongside, doing their bit to give you some competition.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                   <img src="img/malayattor.jpg" style="width: 400px; height: 260px;" class="img-responsive" alt="">       
                </a>
                <h3>
                    <a href="#">Malayattor Perunnal</a>
                </h3>
                <p>The festival of Malayatoor Perunnal is celebrated in the months of March/April every year. It falls on the Sunday after Easter and is organized at the world-famous Catholic Church at Malayatoor, situated near the Cochin city of Kerala. Situated atop the Malayattoor hill, at a height of some 609 m, this church is dedicated to the famous apostle of Jesus Christ, St Thomas.</p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
