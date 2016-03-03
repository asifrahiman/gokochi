
<html>
<head><title>File Insert</title></head>
<body>
<h3>Please Choose a File and click Submit</h3>

<form enctype="multipart/form-data" action="insert.php" method="post">
<label>name</label>
<input type="text"   name="name">
<label>latitude</label>
<input type="text"   name="latitude" >
<label>longitude</label>
<input type="text"   name="longitude" >
<label>shop_id</label>
<input type="text"   name="shop_id" >
<label>shop_category</label>
<input type="text"   name="shop_category" >
<label>description</label>
<textarea   name="description" rows="10" cols="30" ></textarea>

<label>shop_image</label>
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