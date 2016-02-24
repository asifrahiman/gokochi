<?php
  
  $quantity=$_POST['quantity'];
  $name=$_POST['name'];
  $id=$_POST['id'];
  
  session_start();
  error_reporting(0);
  
  $conn = new mysqli("localhost", "root","","shops");
  
  $sql = "SELECT stock FROM products where name='$name' and shop_id=$id ";
  $result=$conn->query($sql);
  $row = $result->fetch_assoc();
  $username=$_SESSION['user_name'];
  if($username){
  if(!$row["stock"])
	  echo "product out of stock";
  else{if($quantity){if($quantity>0){
	  $sql="INSERT INTO `cart` (`username`, `quantity`,id,name) VALUES ('$username', '$quantity','$id','$name')";
  $conn = new mysqli("localhost", "root","","shops");
  if($conn->query($sql)){echo "product added to cart";}else echo "product already in cart";}else echo"please enter a valid quantity";
  }else {echo "please input quantity";}}
  $conn->close();}else {echo "log in to insert review";}
  //header("Location:http://127.0.0.1/asif/shop/shopdisc/proddesc/index.php?name=$name&id=$id&flag=$flag"); 
   //  exit;
  ?> 
