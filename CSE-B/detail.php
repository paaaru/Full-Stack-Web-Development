<?php
include("config.php");


if (isset($_POST["btn"])){
	echo "Your work is done here...GO home NEWb";
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phoneNo=$_POST['phoneNo'];
	$age=$_POST['age'];
	
	//echo $name.$email.$phoneNo.$age;
	$sql="INSERT into usertable(name,age,contact,email) VALUES('$name','$age','$phoneNo','$email')";
	$res=mysqli_query($abc,$sql);

	if(!$res)
		echo "   no ".mysqli_error($abc) ;
	else
		echo "   ins  ";

}

else
	echo "YOU noob";
?>