<?php
$servername="localhost";
$username="root";
$password="";
$database="info_per";

//create connection
$conn = new mysqli($servername, $username, $password, $database);

//check connection
if  ($conn->connect_error) {
    die ("connection failed:" . $conn->connect_error);
    
}
echo "connection established";
?>