
<html>
<head><title>File Insert</title></head>
<body>
<h3>Please Choose a File and click Submit</h3>

<form enctype="multipart/form-data" action="insertimg.php" method="post">
<label>name</label>
<input type="text"   name="name">
<label>id</label>
<input type="text"   name="id" >

<label>image</label>
<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
<input name="userfile" type="file" />
<input type="submit" value="Submit" />
</form>
<?php


if(!isset($_FILES['userfile']))
{
    echo '<p>Please select a file</p>';
}

?>




</body>
</html>