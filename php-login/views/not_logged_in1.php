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
                       
                        <a href="../php-login/index.php"><i class="fa fa-fw fa-sign-in"></i>Login</a>
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

<form method="post" action="index.php" name="loginform"style="margin-top:130px;">
    <div class="container" style="margin-top:50px;">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" id="user_name" type="text" name="user_name" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" id="user_password" type="password" name="user_password" autocomplete="off" required>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" id="user_rememberme" name="user_rememberme" value="1">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-success btn-lg" style="padding-left:20px;margin-left:20px;margin-top:5px;" name="login" value="<?php echo WORDING_LOGIN; ?>" />
                            </fieldset>
                        </form>
                    </div>
					<div class="panel-body" style="margin-top:-25px">
						<div style="padding-left:20px;">
							<a href="register.php"><?php echo WORDING_REGISTER_NEW_ACCOUNT; ?></a>
							<a></a>
							<a href="password_reset.php" ><?php echo WORDING_FORGOT_MY_PASSWORD; ?></a>
							<br>
							
						</div>
					</div>
                </div>
            </div></div>
        <div class="row">
		<div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="../" class="btn btn-lg btn-outline" style="border: 2px solid #171515;
font-size: 20px;color: #2C3E50;"><i class="fa fa-fw fa-arrow-left"></i> Back</a>
                </div>
		 </div>
    </div>
</form>
    
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
