<?php 
session_start();
$username=$_SESSION['user_name']; 
$name=$_POST['name'];
$id=$_POST['id'];

$sql="DELETE FROM `cart` WHERE `username`='$username' and `name`='$name' and `id`='$id'";
$conn4 = new mysqli("localhost", "asif", "asif","shops");
$conn4->query($sql);
header("Location:showcart.php"); 
exit;
					?>