<?php
	include('connect.php');
?>
<html>
	<head>
	</head>
	<body>
	<?php
		if(!empty($msg))
		{
	?>
		<p class="error" style="color:green;">Record updated successfully</p>
	<?php
			
		}
	?>
	<table border="1" cellpadding="10">
		<tr >
			<th>ID</th>
			<th>FIRST NAME</th>
			<th>LAST NAME</th>
			<th>EMAIL</th>
			<th>IMAGE</th>
			<th>DELETE</th>
			<th>EDIT</th>
		</tr>
		<?php
			$sql = "SELECT * from mytable";
			$result = $conn->query($sql);
			
			if ($result->num_rows > 0) {
		// output data of each row
			while($row = $result->fetch_assoc()) {
				?>
			<tr>
			<td><?php echo $row['id'] ?></td>
			<td><?php echo $row['fname'] ?></td>
			<td><?php echo $row['lname'] ?></td>
			<td><?php echo $row['email'] ?></td>
			<td><?php echo $row['image'] ?></td>
			<td><a href="remove.php?delete=<?php echo $row['id']?>">delete</a></td>
			<td><a href="update.php?edit=<?php echo $row['id']?>">edit</a></td>
			</tr>
			
			<?php
			}
			}
		?>
</table>
	</body>
</html>