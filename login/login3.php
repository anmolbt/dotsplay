<?php

$conn = mysql_connect("localhost","root","","logintest"); //username-password
if (!$conn){
	die("connection failed: ".mysqli_connect_error());
}
