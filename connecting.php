<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "lasczarnas";

$connection = @mysqli_connect($servername, $username, $password, $database);
	
// sprawdzanie połączenia
if ($error = mysqli_connect_errno()) {
  die("Connection failed!");
  header("Location: index.php?error=$error");
}
?>