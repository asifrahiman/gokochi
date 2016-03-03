<?php
$id = $_GET['id'];
  
  mysql_connect("localhost", "asif","asif") OR DIE (mysql_error());
  mysql_select_db("travel");
  $sql = "SELECT shop_image FROM activity WHERE shop_id=$id";
  $result = mysql_query("$sql");
  $row = mysql_fetch_assoc($result);
  echo $row['shop_image'];
  ?>