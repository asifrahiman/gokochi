<?php
$id = $_GET['id'];
  
  mysql_connect("localhost", "asif","asif") OR DIE (mysql_error());
  mysql_select_db("yellowpage");
  $sql = "SELECT image FROM services WHERE id=$id";
  $result = mysql_query("$sql");
  $row = mysql_fetch_assoc($result);
  echo $row['image'];
  ?>