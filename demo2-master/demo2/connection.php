<?php
$servername="localhost";
$username="root";
$password="";
$dbname="demo1";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn){
	echo"";
}

else{
	echo "Error In Connection";
	die("connection failed because ".mysqli_connect_error());
}

?>