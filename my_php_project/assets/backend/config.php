<?php
$host = 'mysql'; // Use the service name defined in docker-compose.yml
$dbname = 'fifa_php';
$username = 'root';
$password = 'root_password';


$con = mysqli_connect($host,$username,$password,$dbname);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>
