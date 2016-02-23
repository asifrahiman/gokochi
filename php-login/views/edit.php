<?php include('_header.php'); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
	<link href="bower_components/bootstrap/dist/bootstrap.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
	<link href="bower_components/bootstrap/dist/css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
<!-- clean separation of HTML and PHP -->
<h2><?php echo htmlspecialchars($_SESSION['user_name']); ?> <?php echo WORDING_EDIT_YOUR_CREDENTIALS; ?></h2>

<!-- edit form for username / this form uses HTML5 attributes, like "required" and type="email" -->
<form method="post" action="edit.php" name="user_edit_form_name">
    <div class="container" style="margin-top:50px;">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Edit User Name</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">

									<label for="user_name"><?php echo WORDING_NEW_USERNAME; ?></label>
									<input id="user_name" class="form-control" type="text" name="user_name" pattern="[a-zA-Z0-9]{2,64}" required /> (<?php echo WORDING_CURRENTLY; ?>: <?php echo htmlspecialchars($_SESSION['user_name']); ?>)
									<input type="submit" class="btn btn-success btn-lg"name="user_edit_submit_name" value="<?php echo WORDING_CHANGE_USERNAME; ?>" />
								</fieldset>
                        </form>
                    </div>
					
            </div>
        </div>
		
    </div>
</form>

<!-- edit form for user email / this form uses HTML5 attributes, like "required" and type="email" -->

    
    
    

<form method="post" action="edit.php" name="user_edit_form_email">
    <div class="container" style="margin-top:-200px;">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Edit Email</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">

									<label for="user_email"><?php echo WORDING_NEW_EMAIL; ?></label>
									<input id="user_email" class="form-control" type="email" name="user_email" required /> (<?php echo WORDING_CURRENTLY; ?>: <?php echo htmlspecialchars($_SESSION['user_email']); ?>)
									<input type="submit" class="btn btn-success btn-lg" name="user_edit_submit_email" value="<?php echo WORDING_CHANGE_EMAIL; ?>" />
								</fieldset>
                        </form>
                    </div>
					
            </div>
        </div>
		
    </div>
</form>
<!-- edit form for user's password / this form uses the HTML5 attribute "required" -->

   

<form method="post" action="edit.php" name="user_edit_form_password">
    <div class="container" style="margin-top:-200px;">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Edit Email</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">

									 <label for="user_password_old"><?php echo WORDING_OLD_PASSWORD; ?></label>
									<input id="user_password_old" class="form-control" type="password" name="user_password_old" autocomplete="off" />

									<label for="user_password_new"><?php echo WORDING_NEW_PASSWORD; ?></label>
									<input id="user_password_new" class="form-control" type="password" name="user_password_new" autocomplete="off" />

									<label for="user_password_repeat"><?php echo WORDING_NEW_PASSWORD_REPEAT; ?></label>
									<input id="user_password_repeat" class="form-control" type="password" name="user_password_repeat" autocomplete="off" />

									<input type="submit" class="btn btn-success btn-lg"name="user_edit_submit_password" value="<?php echo WORDING_CHANGE_PASSWORD; ?>" />
								</fieldset>
                        </form>
                    </div>
					
            </div>
        </div>
		
    </div>
</form>
<!-- backlink -->
<div style="padding-left:500px;margin-bottom:100px;margin-top:50px;">
	<a href="index.php" ><?php echo WORDING_BACK_TO_LOGIN; ?></a>
</div>
<?php include('_footer.php'); ?>
