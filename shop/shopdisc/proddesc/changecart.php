<?php session_start(); error_reporting(0); 
  $username=$_SESSION['user_name'];
  $quantity=$_POST['quantity'];
  $name=$_POST['name'];
  $id=$_POST['id'];
  $conn = new mysqli("localhost", "root","","asif");
  $sql = "SELECT username FROM `asif` where id=$id";
  $result=$conn->query($sql);
  $row = $result->fetch_assoc();
  $shopname=$row["username"];
  $sql = "SELECT stock FROM $shopname where name='$name' ";
  $result=$conn->query($sql);
  $row = $result->fetch_assoc();
  
  if(!$row["stock"])
	 echo "Product out of stock";
  else{if($quantity){
	  $sql="UPDATE `cart` SET `quantity` = $quantity WHERE username = '$username' and name='$name' and id=$id ";
  $conn = new mysqli("localhost", "root","","asif");
  if($conn->query($sql)){echo "Quantity changed";}
  }else {echo "Please input quantity";}}
  $conn->close();
 // header("Location:http://127.0.0.1/asif/shop/shopdisc/proddesc/showcart.php?name=$name&id=$id&flag=$flag"); 
  // exit;
  ?> 
