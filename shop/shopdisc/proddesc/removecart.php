<?php 
session_start();
$username=$_SESSION['user_name']; 
$name=$_POST['name'];
$id=$_POST['id'];

$sql="DELETE FROM `cart` WHERE `username`='$username' and `name`='$name' and `id`='$id'";
$conn4 = new mysqli("localhost", "root","","asif");
$conn4->query($sql);
//header("Location:http://127.0.0.1/asif/shop/shopdisc/proddesc/showcart.php"); 
  //   exit;
					?>