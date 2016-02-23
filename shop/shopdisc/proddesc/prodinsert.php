<html>
<head><title>File Insert</title></head>
<body>
<h3>Please Choose a File and click Submit</h3>

<form enctype="multipart/form-data" action="insert.php" method="post">
<label>name</label>
<input type="text"   name="name">
<label>price</label>
<input type="text"   name="price" >
<label>stock</label>
<input type="text"   name="stock" >
<label>description</label>
<textarea   name="description" rows="10" cols="30" ></textarea>
<label>company</label>
<input type="text"   name="company" >
<label>shop</label>
<input type="text"   name="shop" >
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