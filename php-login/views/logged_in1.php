<?php include('_header.php'); ?>
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
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<style>
	.login-btn {
		margin-top: 15px;
		border: 2px solid #000000;
		font-size: 20px;
		

		background-color:#ffff;
		
		transition: all 0.3s ease-in-out 0s;
			padding: 18px 27px;
    
		line-height: 1.33333;
		border-radius: 15px;
		display: inline-block;
 
		font-weight: normal;
		text-align: center;
		vertical-align: middle;
		cursor: pointer;

		white-space: nowrap;

		-moz-user-select: none;
}
}
	}
</style>
<body id="page-top" class="index">

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
                <a class="navbar-brand" href="../"><i class="fa fa-spinner fa-pulse"></i>Go kochi!</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="../">Services</a>
                    </li>
					
					<li class="page-scroll">
                        <a href="../">About Kochi</a>
                    </li>
                    <li class="page-scroll">
                        <?php   
						if(isset($_SESSION['user_name'])){$username=$_SESSION['user_name'];?>
                        <a href="../php-login/index.php">Welcome <?php echo $username;?></a>
						<?php  } else{?>
                        <a href="../php-login/index.php"><i class="fa fa-fw fa-sign-in"></i>Login</a><?php }?>
                    </li>
					<li class="page-scroll">
                        <a href="../">Contact Us</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


<div class="container" style="margin-top:200px;"">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Logged In</h3>
                    </div>
                    <div class="panel-body">
						<div>
							<?php error_reporting(0);
							// if you need the user's information, just put them into the $_SESSION variable and output them here
							echo WORDING_YOU_ARE_LOGGED_IN_AS . htmlspecialchars($_SESSION['user_name']) . "<br />";
							//echo WORDING_PROFILE_PICTURE . '<br/><img src="' . $login->user_gravatar_image_url . '" />;
							//echo WORDING_PROFILE_PICTURE . '<br/>' . $login->user_gravatar_image_tag;
							//$imgsrc = "getimg.php?id=".$_SESSION['user_id'];
							?>
						
							<img src="getimg.php?id=<?php echo $_SESSION['user_id']; ?>" width="200" height="200" />
							<br>
							<a href="edit.php"><?php echo WORDING_EDIT_USER_DATA; ?></a><br>
							<a href="index.php?logout"><?php echo WORDING_LOGOUT; ?></a>
							
							
							
						</div>
					</div>
                </div>
            </div>
        </div>
		<a href="../" class="login-btn" style="text-align:center;margin-top:-0px;margin-left:500px;"><i class="fa fa-fw fa-arrow-left"></i> Back</a>
    </div>
	
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

<?php include('_footer.php'); ?>
