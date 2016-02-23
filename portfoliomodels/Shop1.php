<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Go kochi!</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="http://127.0.0.1/asif/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="http://127.0.0.1/asif/css/freelancer.css" rel="stylesheet">
	
    <!-- Custom Fonts -->
    <link href="http://127.0.0.1/asif/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

< ody id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" >
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://127.0.0.1/asif/"><i class="fa fa-fw fa-google"></i>Go kochi!</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="http://127.0.0.1/asif/index.php">Portfolio</a>
                    </li>
					
					<li class="page-scroll">
                        <a href="http://127.0.0.1/asif/about.php">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="http://127.0.0.1/asif/php-login/">Register</a>
                    </li>
					<li class="page-scroll">
                        <a href="http://127.0.0.1/asif/index.php">Contact</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	
	
	<div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
	<div class="container"style="margin-top:300px;margin-bottom:300px; ">
	<a href="http://www.google.co.in/maps/@9.176476,76.6009191,15z"><img src="http://127.0.0.1/asif/img/portfolio/cabin.png" alt=""></a>
<?php
echo"Welcome " .$_GET["name"]."<br>"; 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$name = $_GET["name"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "SELECT user_id,user_name,user_email FROM `users` ";

if ($conn->query($sql)) {
    echo "Table MyGuests created successfully";
	$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()){if($_GET["name"]==$row["user_name"]){ ?>
       <table>
	   <tr><th>id</th><th>name</th><th>email</th></tr>
	   <tr><td><?php echo$row["user_id"] ?></td><td> <?php echo  $row["user_name"] ?></td><td> <?php echo $row["user_email"]?></td></tr>
		</table>
	<?php } }
} else {
    echo "0 results";
}
} else {
    echo "Error creating table: " . $conn->error;
}?>
<?php
$conn->close();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "asif";
$name = $_GET["name"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "INSERT INTO `asif1` (`name`) VALUES  ( '$name');";

if ($conn->query($sql)) {
    echo "Table MyGuests created successfully";
	
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();
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

// sql to create table
$sql = "SELECT id,name FROM `asif`";

if ($conn->query($sql)) {
    echo "Table MyGuests created successfully";
	$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {if($_GET["name"]==$row["name"])
        echo " <br> id: ".$row["id"]."<br> Name: " . $row["name"]. " <br> ";
    }
} else {
    echo "0 results";
}
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
</div>
<footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                         <h3>Location</h3>
                        <p>School of Engineering<br>CUSAT<br>KOCHI-022</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin "></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About Freelancer</h3>
                        <p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Your Website 2014
                    </div>
                </div>
            </div>
        </div>
    </footer>

    
   

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