<?php
	include('connect.php');
	
	$edit_record=$_GET['edit'];
	$sql="select * from mytable where id='$edit_record'";
	$result = $conn->query($sql);
	if($row = $result->fetch_assoc())
	{
		$u_id=$row['id'];
		$u_fname=$row['fname'];
		$u_lname=$row['lname'];
		$u_email=$row['email'];
		
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
	</head>
	<body>
	<a href="view.php">back</a>
	<h1>Update Registeration</h1>
		<form action="update.php?edit_form=<?php echo $u_id;?>" method="post">
			Name: <input type="text" name="u_fname" value="<?php echo $u_fname?>"><br><br>
			Last Name: <input type="text" name="u_lname" value="<?php echo $u_lname?>"><br><br>
			Email: <input type="text" name="u_email" value="<?php echo $u_email?>"><br><br>
			<input type="submit" name="update" value="update" >
		</form>
	</body>
</html>
<?php
if(isset($_POST['update']))
{
	$edit_record1=$_GET['edit_form'];
	
	$fname=$_POST['u_fname'];
	$lname=$_POST['u_lname'];
	$email=$_POST['u_email'];
	
	$query="UPDATE mytable SET fname='$fname',lname='$lname',email='$email' WHERE id=$edit_record1";
	
	if ($conn->query($query) === TRUE) {
		$msg="Record updated successfully";
		header("Location: read.php");
		
		} else {
		echo "Error updating record: " . mysqli_error($conn);
}
	
}
?>