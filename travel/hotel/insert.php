<?php
	$name=$_POST['name'];
	$lattitude=$_POST['lattitude'];
	$longitude=$_POST['longitude'];
	$description=$_POST['description'];

	
	    $maxsize = 10000000; 
    if($_FILES['userfile']['error']==UPLOAD_ERR_OK) {
		if(is_uploaded_file($_FILES['userfile']['tmp_name'])) {
			if( $_FILES['userfile']['size'] < $maxsize) {
				$imgData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
				mysql_connect("localhost", "asif", "asif") OR DIE (mysql_error());
				mysql_select_db("travel");
				$sql = "INSERT INTO h&r (name,latitude,longitude,description,shop_image,shop_category) VALUES ('$name','$latitude','$longitude','$description','{$imgData}',$shop_category');";
				mysql_query($sql) or die("Error in Query: " . mysql_error());
                $msg='<p>Image successfully saved in database with id ='. mysql_insert_id().' </p>';
               }
             else {
               
                $msg='<div>File exceeds the Maximum File limit</div>
                <div>Maximum File limit is '.$maxsize.' bytes</div>
                <div>File '.$_FILES['userfile']['name'].' is '.$_FILES['userfile']['size'].
                ' bytes</div><hr />';
                }
        }
        else
            $msg="File not uploaded successfully.";
	}
    else {
        $msg= file_upload_error_message($_FILES['userfile']['error']);
    }
    echo $msg;

?>
