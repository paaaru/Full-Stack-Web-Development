<!DOCTYPE html>
<?php

if (isset($_POST["btn"])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phoneNo=$_POST['phoneNo'];
	$age=$_POST['age'];
	echo "hello $name ";
	echo "$email <br>";
}

else
	echo "YOU noob";
?>


<html>
<head>
	<title>LOCAL PAGE</title>
	<link rel="stylesheet" type="text/css" href="random.css">

</head>
<style type="text/css"></style>

<body>
	<form action="form1.php" method="post">
		name:<input id="name" type="text" name="name" placeholder="enter your name"><br>
		email:<input id="id" type ="text" name="email" placeholder="enter your email"><br>
		phoneNo:<input type="text" name="phoneNo"><br>
		age:<input id="age" type="text" name="age" placeholder="enter age"><br>
		<input type="submit" name="btn" id="btn">

	
</form>


</body>
</html>