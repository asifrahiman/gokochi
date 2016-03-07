
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
	input:invalid { border: 2px solid red;}
	input:valid { border: 2px solid green; }
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
                        <?php if(isset($_SESSION['user_name'])){$username=$_SESSION['user_name'];?>
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

<?php if ($login->passwordResetLinkIsValid() == true) { ?>
<form method="post" action="password_reset.php" name="new_password_form" >
     <div class="container" >
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
				<?php include('_header.php'); ?>
			</div>
			<div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default"style="margin-top:200px;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Password Reset</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
									<input type='hidden'class="form-control" name='user_name' value='<?php echo htmlspecialchars($_GET['user_name']); ?>' />
								
									<input type='hidden'class="form-control" name='user_password_reset_hash' value='<?php echo htmlspecialchars($_GET['verification_code']); ?>' />
								
									<label for="user_password_new"><?php echo WORDING_NEW_PASSWORD; ?></label>
									<input id="user_password_new" class="form-control"type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
								
									<label for="user_password_repeat"><?php echo WORDING_NEW_PASSWORD_REPEAT; ?></label>
									<input id="user_password_repeat" class="form-control"type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
									<button type="submit" class="form-control"name="submit_new_password" value="" ><?php echo WORDING_SUBMIT_NEW_PASSWORD; ?></button>
								</div>
							</fieldset>
						</form>
<!-- no data from a password-reset-mail has been provided, so we simply show the request-a-password-reset form -->
<?php } else { ?>
<form method="post" action="password_reset.php" name="password_reset_form">
	<div class="container" style="margin-top:150px;">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Password Reset</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
									<label for="user_name"><?php echo WORDING_REQUEST_PASSWORD_RESET; ?></label>
									<input id="user_name" class="form-control" type="text" name="user_name" required />
									<input type="submit" class="btn btn-success btn-lg" name="request_password_reset" value="<?php echo WORDING_RESET_PASSWORD; ?>" />

								</div>
							</fieldset>
						</form>
					</div>
<?php } ?>
					<div class="panel-body" style="margin-top:-25px">
						<div style="padding-left:5px;">
							<a href="index.php"><?php echo WORDING_BACK_TO_LOGIN; ?></a>
						</div>
					</div>
                </div>
            </div>
        </div>
		<a href="../" class="login-btn" style="text-align:center;margin-bottom:50px;margin-left:500px;"><i class="fa fa-fw fa-arrow-left"></i> Back</a>
    </div>
</form>
 <!-- jQuery -->
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
	<script> 
 function checkPasswords() {
 var user_password_new = document.getElementById('user_password_new');
 var user_password_repeat = document.getElementById('user_password_repeat');
 if (user_password_new.value != user_password_repeat.value) {
	user_password_repeat.setCustomValidity('passwords do not match');
	document.getElementById('error_msg').innerHTML="Passwords do not match";

 } else {
 user_password_repeat.setCustomValidity('');
 document.getElementById('error_msg').innerHTML="Passwords match";
 }
 }
</script>

</body>
<?php include('_footer.php'); ?>
