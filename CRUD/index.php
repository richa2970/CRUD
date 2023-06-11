<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
<style>
	body{
		background-color: red;
		font-size: 50px;
		background-image: url("https://cdn.pixabay.com/photo/2023/06/04/23/20/crab-8041055_1280.jpg");
		background-size: cover;
	}
</style>
<html>
<head>	
	<title >Homepage</title>
</head>

<body>
	<h2 align='center' >Homepage</h2>
	<p align='center' >
		<a href="add.php" >Add New Data</a>
	</p>
	<table width='80%' border=0 align='center' >
		<tr bgcolor='#DDDDDD'>
			<td><strong>Name</strong></td>
			<td><strong>Age</strong></td>
			<td><strong>Email</strong></td>
			<td><strong>Action</strong></td>
		</tr>
		<?php
		// Fetch the next row of a result set as an associative array
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['age']."</td>";
			echo "<td>".$res['email']."</td>";	
			echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | 
			<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		}
		?>
	</table>
</body>
</html>
