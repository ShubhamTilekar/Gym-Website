<?php
$servername = "localhost";
$username = "root";
$password = "0564";
$dbname = "project"; // Database name 

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)

{
	echo "...";
}
else 
{
	die ("Connection failed because ".mysqli_connect_error()); 
 }

?>