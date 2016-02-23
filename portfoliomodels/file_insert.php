<html>
<head><title>File Insert</title></head>
<body>
<h3>Please Choose a File and click Submit</h3>

<form enctype="multipart/form-data" action="insertimg.php" method="post">
<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
<input name="userfile" type="file" />
<label>username</label>
<input type="text"   name="username" name="username">
<input type="submit" value="Submit" />
</form>
<?php


if(!isset($_FILES['userfile']))
{
    echo '<p>Please select a file</p>';
}

?>


<img src="getimg.php?id=13" width="175" height="200" />

</body>
</html>