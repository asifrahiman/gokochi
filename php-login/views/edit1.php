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
                <a class="navbar-brand" href="http://127.0.0.1/asif/"><i class="fa fa-spinner fa-pulse"></i>Go kochi!</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="http://127.0.0.1/asif">Services</a>
                    </li>
					
					<li class="page-scroll">
                        <a href="http://127.0.0.1/asif">About Kochi</a>
                    </li>
                    <li class="page-scroll">
                        <?php  if(isset($_SESSION['user_name'])){$username=$_SESSION['user_name'];?>
                        <a href="http://127.0.0.1/asif/php-login/index.php">Welcome <?php echo $username;?></a>
						<?php  } else{?>
                        <a href="http://127.0.0.1/asif/php-login/index.php"><i class="fa fa-fw fa-sign-in"></i>Login</a><?php }?>
                    </li>
					<li class="page-scroll">
                        <a href="http://127.0.0.1/asif">Contact Us</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
<!-- clean separation of HTML and PHP -->
<h2><?php echo htmlspecialchars($_SESSION['user_name']); ?> <?php echo WORDING_EDIT_YOUR_CREDENTIALS; ?></h2>

<!-- edit form for username / this form uses HTML5 attributes, like "required" and type="email" -->

    <div class="container" style="margin-top:80px;">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Edit User Details</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="edit.php" name="user_edit_form_name">
                            <fieldset>
                                <div class="form-group">

									<label for="user_name"><?php echo WORDING_NEW_USERNAME; ?></label>
									<input id="user_name" class="form-control" type="text" name="user_name" pattern="[a-zA-Z0-9]{2,64}" required /> (<?php echo WORDING_CURRENTLY; ?>: <?php echo htmlspecialchars($_SESSION['user_name']); ?>)
									<input type="submit" class="btn btn-success btn-lg"name="user_edit_submit_name" value="<?php echo WORDING_CHANGE_USERNAME; ?>" />
								</div>
							</fieldset>
								
                        </form>
						<form role="form" method="post" action="edit.php" name="user_edit_form_email">
                            <fieldset>
                                <div class="form-group">

									<label for="user_email"><?php echo WORDING_NEW_EMAIL; ?></label>
									<input id="user_email" class="form-control" type="email" name="user_email" required /> (<?php echo WORDING_CURRENTLY; ?>: <?php echo htmlspecialchars($_SESSION['user_email']); ?>)
									<input type="submit" class="btn btn-success btn-lg" name="user_edit_submit_email" value="<?php echo WORDING_CHANGE_EMAIL; ?>" />
								</div>
							</fieldset>
                        </form>
						
                            <fieldset>
                                <div class="form-group">
								<label for="image"><?php echo "Current Picture" ?></label><br>
								<img src="getimg.php?id=<?php echo $_SESSION['user_id']; ?>" width="200" height="200" /><br>
								<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
                                <label for="picture"><?php echo "Select Image"; ?></label>
								<form role="form" method="post" enctype="multipart/form-data" action="edit.php" name="user_edit_form_picture">
								<input id="picture" name="userfile" type="file"  />
								<input type="submit" class="btn btn-success btn-lg" name="user_edit_submit_picture" value="<?php echo "Change Picture " ?>" />
								</form>
								</div>
							</fieldset>
                        
						<form role="form" method="post" action="edit.php" name="user_edit_form_password">
                            <fieldset>
                                <div class="form-group" method="post" action="edit.php" name="user_edit_form_password">

									 <label for="user_password_old"><?php echo WORDING_OLD_PASSWORD; ?></label>
									<input id="user_password_old" class="form-control" type="password" name="user_password_old" autocomplete="off" />

									<label for="user_password_new"><?php echo WORDING_NEW_PASSWORD; ?></label>
									<input id="user_password_new" class="form-control" type="password" name="user_password_new" autocomplete="off" />

									<label for="user_password_repeat"><?php echo WORDING_NEW_PASSWORD_REPEAT; ?></label>
									<input id="user_password_repeat" class="form-control" type="password" name="user_password_repeat" autocomplete="off" />

									<input type="submit" class="btn btn-success btn-lg"name="user_edit_submit_password" value="<?php echo WORDING_CHANGE_PASSWORD; ?>" />
									</div>
							</fieldset>
                        </form>
						
                    </div>
					
            </div>
        </div>
		
    </div>


<!-- edit form for user email / this form uses HTML5 attributes, like "required" and type="email" -->
	
    
    


<!-- backlink -->
<div style="padding-left:500px;margin-bottom:50px;margin-top:0px;">
	<a href="index.php" ><?php echo WORDING_BACK_TO_LOGIN; ?></a>
</div>

	 

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
<?php include('_footer.php'); ?>
