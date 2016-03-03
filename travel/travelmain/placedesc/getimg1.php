<?php
$id = $_GET['prodid'];
$name=$_GET['name']; 
  mysql_connect("localhost", "asif", "asif") OR DIE (mysql_error());
  mysql_select_db("asif");
  $sql = "SELECT image FROM $name WHERE prodid=$id";
  $result = mysql_query("$sql");
  $row = mysql_fetch_assoc($result);
  
  echo $row['image'];
  ?>