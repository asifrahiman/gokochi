<?php session_start();
  $username=$_SESSION['user_name'];
  $quantity=$_POST['quantity'];
  $name=$_POST['name'];
  $id=$_POST['id'];
  $conn = new mysqli("localhost", "asif", "asif","shops");
  
  $sql = "SELECT stock FROM products where name='$name' and shop_id=$id ";
  $result=$conn->query($sql);
  $row = $result->fetch_assoc();
  
  if(!$row["stock"])
	 echo "Product out of stock";
  else{if($quantity){if($quantity>0){
	  $sql="UPDATE `cart` SET `quantity` = $quantity WHERE username = '$username' and name='$name' and id=$id ";
  
  if($conn->query($sql)){echo "Quantity changed";}}else echo"plese input valid quantity";
  }else {echo "Please input quantity";}}
  $conn->close();
  header("Location:showcart.php"); 
  exit;
  ?> 
