<?php
$id = $_GET['id'];
$name=$_GET['name'];
  mysql_connect("localhost", "asif","asif") OR DIE (mysql_error());
  mysql_select_db("shops");
  $sql = "SELECT image FROM products WHERE shop_id=$id and name='$name'";
  $result = mysql_query("$sql");
  $row = mysql_fetch_assoc($result);
  
  echo $row['image'];
  ?>