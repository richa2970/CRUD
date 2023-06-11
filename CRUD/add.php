<html>
<head>
	<title>Add Data</title>
</head>
<style>
	body{
		background-color: red;
		font-size: 50px;
		background-image: url("https://cdn.pixabay.com/photo/2023/06/04/23/20/crab-8041055_1280.jpg");
		background-size: cover;
	}
	td{
		font-size: 30px;
	}
</style>
<body>
	<h2 align='center' >Add Data</h2>
	<p align='center' >
		<a href="index.php">Home</a>
	</p>

	<form action="addAction.php" method="post" name="add">
		<table width="25%" border="0" align='center' >
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="age"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>

