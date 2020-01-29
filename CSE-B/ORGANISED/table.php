<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<thead border="5" width=100%>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>age</th>
			<th>contact</th>
			<th>email</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$sql="select * from usertable";
			$res=mysqli_query($abc,$sql);
			while($row=mysqli_fetch_array($res)){?>
			<tr>
			<th><?php echo $row['id'] ?></th>
			<th><?php echo $row['name'] ?></th>
			<th><?php echo $row['age'] ?></th>
			<th><?php echo $row['contact'] ?></th>
			<th><?php echo $row['email'] ?></th>
		</tr>
	</tbody>
<?php } ?>
</table>
</body>
</html>