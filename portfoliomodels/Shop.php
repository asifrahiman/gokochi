<html>
<a href="http://www.google.co.in/maps/@9.176476,76.6009191,15z"><img src="http://127.0.0.1/asif/img/portfolio/cabin.png" alt="">
</a>
<form>
<a><?php echo $_GET["name"]?></a>
<a id='nothing'>chumma</a>
<input type="button" value="submit" onmouseover='notext()'>
</form>
<?php
echo"Welcome " .$_GET["name"]."<br>"; 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "SELECT user_id,user_name,user_email FROM `users` ";

if ($conn->query($sql)) {
    echo "Table MyGuests created successfully";
	$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {if($_GET["name"]==$row["user_name"])
        echo "<br>id: " . $row["user_id"]. " <br> Name: " . $row["user_name"]. " <br> email: " . $row["user_email"]. "<br>";
    }
} else {
    echo "0 results";
}
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "asif";
$name = $_GET["name"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "INSERT INTO `asif1` (`name`) VALUES  ( '$name');";

if ($conn->query($sql)) {
    echo "Table MyGuests created successfully";
	
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "asif";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "SELECT id,name FROM `asif`";

if ($conn->query($sql)) {
    echo "Table MyGuests created successfully";
	$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {if($_GET["name"]==$row["name"])
        echo " <br> id: ".$row["id"]."<br> Name: " . $row["name"]. " <br> ";
    }
} else {
    echo "0 results";
}
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>