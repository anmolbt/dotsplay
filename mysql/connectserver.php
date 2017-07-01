<?php



$servername = "localhost";
$username = "root";
$password = '';
$db='test';

// Create connection
$conn = new mysqli($servername, $username, $password,$test) or die("Unable to connect");

// Check connection
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";



?>