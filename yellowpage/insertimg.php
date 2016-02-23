<?php
	$id=$_POST['id'];
    $maxsize = 10000000; 
     if($_FILES['userfile']['error']==UPLOAD_ERR_OK) {
		if(is_uploaded_file($_FILES['userfile']['tmp_name'])) {
			if( $_FILES['userfile']['size'] < $maxsize) {
				$imgData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
				mysql_connect("localhost", "root", "") OR DIE (mysql_error());
				mysql_select_db("travel");
				$sql = "INSERT INTO carousal (image, name,id) VALUES ('{$imgData}', '{$_FILES['userfile']['name']}','$id');";
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
