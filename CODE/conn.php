<?php

$conn=mysqli_connect("localhost","root","","kamal");
if ($conn)
 {
	echo"connection established";
 }
else{
	echo "connection failed";
}
?>