
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


    
<!-- show registration form, but only if we didn't submit already -->
<?php if (!$registration->registration_successful && !$registration->verification_successful) { ?>
<form method="post" enctype="multipart/form-data" action="register.php" name="registerform"style="margin-top:140px;">
	<div class="container" style="margin-top:50px;">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
				<?php include('_header.php'); ?>
			</div>
			<div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Register</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
									<label for="user_name"><?php echo WORDING_REGISTRATION_USERNAME; ?></label>
									<input id="user_name" class="form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />

									<label for="user_email"><?php echo WORDING_REGISTRATION_EMAIL; ?></label>
									<input id="user_email" class="form-control" type="email" name="user_email" required />

									<label for="user_password_new"><?php echo WORDING_REGISTRATION_PASSWORD; ?></label>
									<input id="user_password_new" class="form-control" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />

									<label for="user_password_repeat"><?php echo WORDING_REGISTRATION_PASSWORD_REPEAT; ?></label>
									<input id="user_password_repeat" class="form-control" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
									<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
                                    <label for="picture"><?php echo "Select Image"; ?></label>
									<input id="picture" name="userfile" type="file"  />
									<img src="tools/showCaptcha.php" alt="captcha" />

									<label><?php echo WORDING_REGISTRATION_CAPTCHA; ?></label>
									<input type="text"  class="form-control" name="captcha" required />
								</div>
									<input type="submit" class="btn btn-success btn-lg" name="register" value="<?php echo WORDING_REGISTER; ?>" />
							</fieldset>
                        </form>
                    </div>
					<div style="padding-left:20px;margin-bottom:25px;text-align:center;">
							<a href="index.php"><?php echo WORDING_BACK_TO_LOGIN; ?></a>
					</div>
				</div>
            </div>
        </div>
			<a href="../" class="login-btn col-md-4-offset-4" style="text-align:center;margin-bottom:50px;"><i class="fa fa-fw fa-arrow-left"></i> Back</a>
	 </div>
</form>
					
					<?php } else if ($registration->registration_successful && !$registration->verification_successful){?>
					
						
						<div style="padding-left:20px;margin-top:160px;text-align:center;">
							<div class="col-md-4-offset-4 text-align=center"><?php include('_header.php'); ?>
							<a href="../" class="login-btn" style="text-align:center;margin-bottom:50px;"><i class="fa fa-fw fa-arrow-left"></i> Back</a>
							</div>
							
						</div>
					
            <br>    
		
   
						
	<?php }else if ($registration->verification_successful){?>
					
						
						<div style="padding-left:20px;margin-top:160px;text-align:center;">
							<div class="col-md-4-offset-4 text-align=center"><?php include('_header.php'); ?></div>
							<a href="index.php"><?php echo WORDING_BACK_TO_LOGIN; ?></a>
						</div>
					
            <br>    
		
   
						
	<?php } ?>	

					
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
