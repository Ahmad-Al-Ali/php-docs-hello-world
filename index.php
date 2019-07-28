
<?php
echo "hello"
$servername = "ah-db-server.mysql.database.azure.com";
$username = "ahmadalali@ah-db-server";
$password =  getenv("pass") // "Imsup3rawesome";

//$con=mysqli_init(); mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con, "ah-db-server.mysql.database.azure.com", "ahmadalali@ah-db-server", {your_password}, {your_database}, 3306);
//Create connection
$conn = new mysqli($servername, $username, $password);

 // Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
 echo "Connected successfully";

// // Create database
 $sql = "CREATE DATABASE myDB";
 if ($conn->query($sql) === TRUE) {
     echo "Database created successfully";
 } else {
     echo "Error creating database: " . $conn->error;
 }

 $conn->close();
 ?>

