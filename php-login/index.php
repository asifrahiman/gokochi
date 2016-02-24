<?php

/**
 * A simple PHP Login Script / ADVANCED VERSION
 * For more versions (one-file, minimal, framework-like) visit http://www.php-login.net
 *
 * @author Panique
 * @link http://www.php-login.net
 * @link https://github.com/panique/php-login-advanced/
 * @license http://opensource.org/licenses/MIT MIT License
 */
  error_reporting(0);

 $flag=0;
 
 if($_GET['flag']==2)
 {
  $flag=$_GET['flag'];
  $sql="INSERT INTO `status` (`flag`) VALUES ('$flag')";
  $conn = new mysqli("gokochi.cloudapp.net", "root","g0k0chi@123","login");
  $conn->query($sql);
  $conn->close();
 }
  $sql="select * from status" ;
  $conn = new mysqli("localhost", "root","","login");
  $result=$conn->query($sql);
  $row = $result->fetch_assoc(); 
  $flag=$row['flag'];
  $conn->close();
  
// check for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit('Sorry, this script does not run on a PHP version smaller than 5.3.7 !');
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once('libraries/password_compatibility_library.php');
}
// include the config
require_once('config/config.php');

// include the to-be-used language, english by default. feel free to translate your project and include something else
require_once('translations/en.php');

// include the PHPMailer library
require_once('libraries/PHPMailer.php');

// load the login class
require_once('classes/Login.php');

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process.
$login = new Login();

// ... ask if we are logged in here:
if ($login->isUserLoggedIn() == true) {
    if($flag==0)
    include("views/logged_in1.php");
    
	 if($flag==2)
	{$sql="TRUNCATE `status`";
	  $conn = new mysqli("localhost", "root","","login");
	  $conn->query($sql);
	  $conn->close();
	 $username=$_SESSION['user_name'];
	 header("Location:http://127.0.0.1/asif/shop/shopdisc/proddesc/showcart.php?"); 
     exit;}
	

} else {
    // the user is not logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are not logged in" view.
    include("views/not_logged_in1.php");
}
