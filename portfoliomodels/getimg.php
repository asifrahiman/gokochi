<?php
$id = $_GET['id'];
  
  mysql_connect("localhost", "root", "") OR DIE (mysql_error());
  mysql_select_db("asif");
  $sql = "SELECT image FROM asif WHERE id=$id";
  $result = mysql_query("$sql");
  $row = mysql_fetch_assoc($result);
  
  echo $row['image'];
  ?>