<?php
$id = $_GET['id'];
  
  $conn = new mysqli("localhost", "asif","asif", "travel");
  $sql = "SELECT * FROM `r&s` WHERE id=$id";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  
  echo $row['image'];
  ?>
  