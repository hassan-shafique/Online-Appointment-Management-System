<?php
$conn = mysqli_connect('testapp-server.mysql.database.azure.com:3306','testapp-server.mysql.database.azure.com','Calrom123','testapp-database');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
