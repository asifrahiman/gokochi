<?php
$id = $_GET['id'];
  
  $conn = new mysqli("localhost", "asif","asif", "travel");
  $sql = "SELECT * FROM `h&r` WHERE shop_id=$id";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  
  echo $row['shop_image'];
  ?>
  