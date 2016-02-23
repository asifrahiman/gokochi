<?php session_start();
error_reporting(0);

 $rating=$_POST['rating'];
  $comment=$_POST['comment'];
  $id=$_POST['id'];
 
  $username=$_SESSION['user_name'];
  if($username){
  if($comment or $rating){
  $sql="INSERT INTO `rivew` (`rating`, `comment`,id,username) VALUES ('$rating', '$comment','$id','$username')";
  $conn = new mysqli("localhost", "root","","travel");
  if($conn->query($sql))
	  {
    echo "review inserted";
}
else{
   $response_array['status'] = 'error';
}
  $conn->close();
 }else {echo "please enter a review";}
 }else {echo "log in to insert review";}
 //header("Location:http://127.0.0.1/asif/travel/placedesc/index.php?key1=$id&flag=$flag" ); 
  //exit;?>