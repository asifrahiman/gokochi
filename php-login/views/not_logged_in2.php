<?php include('_header.php'); ?>
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
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index" style="overflow:hidden;">

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
                <a class="navbar-brand" href="http://127.0.0.1/asif/">Go kochi!</a>
            </div>

                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Portfolio</a>
                    </li>
					<li class="page-scroll">
                        <a href="http://127.0.0.1/asif/about.php">about</a>
                    </li>
                    <li class="page-scroll">
                        <a href="http://127.0.0.1/asif/php-login/">Register</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div
        </div>
        <!-- /.container-fluid -->
    </nav>
	<style>
	.login-btn {
		margin-top: 15px;
		border: 2px solid #FFF;
		font-size: 20px;
		color:#ffff;

		background: #2C3E50;
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

<form method="get" action="index.php" name="loginform">
    <div class="container" style="padding-top:150px;">
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
            </div>
        </div>
		<a href="http://127.0.0.1/asif/" class="login-btn" style="text-align:center;margin-top:-0px;margin-left:500px;"><i class="fa fa-fw fa-arrow-left"></i> Back</a>
    </div>
</form>
    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="../js/classie.js"></script>
    <script src="../js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/freelancer.js"></script>

</body>

</html>
<?php include('_footer.php'); ?>