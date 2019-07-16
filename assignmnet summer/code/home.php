<?php
	include('connect.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
	</head>
	<body>
	<a href="read.php">view</a>
	<h1>Registeration</h1>
		<form action="home.php" method="post" enctype="multipart/form-data">
			Name: <input type="text" name="fname"><br><br>
			Last Name: <input type="text" name="lname"><br><br>
			Email: <input type="text" name="email"><br><br>
			<input type="submit" name="submit" value="submit" >
		</form>
	</body>
</html>
<?php
	if(isset($_POST['submit']))
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		
		$sql = "INSERT INTO mytable(fname,lname,email)VALUES ('$fname', '$lname', '$email')";
		
		if ($conn->query($sql) === TRUE) {
		echo "<script>alert('New record created successfully')</script>";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
?>