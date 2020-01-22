<?php
include("config.php");


if (isset($_POST["btn"])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phoneNo=$_POST['phoneNo'];
	$age=$_POST['age'];
	echo "hello $name ".'<br>';
	echo "your email is $email".'<br>';
	echo "your phoneNo is $phoneNo".'<br>';
}

else
	echo "YOU noob";
?>