<?php
$servername = "ah-db-server.mysql.database.azure.com";
$username = "ahmadalali@ah-db-server";
$password = "Imsup3rawesome";

//$con=mysqli_init(); mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con, "ah-db-server.mysql.database.azure.com", "ahmadalali@ah-db-server", {your_password}, {your_database}, 3306);
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>


<?php

echo "Hello World!";

?>
