<?php
	session_start();
	if(isset($_SESSION["UN"]))
	{
	}
	else
	{
		header("Location: index.php");	
	}
?>
<html>
	<head>
		<title>Admin::Create New Client</title>
		<link rel="stylesheet" type="text/css" href="formStyle.css">
	</head>
	<body>
	<hr>
	<form action="createNewClientAction.php" method="post">
		Username:
		<input type="text" name="username"><br><br>
		Password:
		<input type="text" name="password"><br><br>
		Name:
		<input type="text" name="name"><br><br>
		Email:
		<input type="text" name="email"><br><br>
		Birthday:
		<input type="date" name="birthday"><br><br>
		Current Team:
		<select name="team">
			<option value="Team A">Team A</option>
			<option value="Team B">Team B</option>
			<option value="Team C">Team C</option>
			<option value="Team D">Team D</option>
			<option value="Team E">Team E</option>
		</select><br><br>
		
		Current Position:
		<select name="position">
			<option value="Head">Head</option>
			<option value="Sr Programmer">Sr Programmer</option>
			<option value="Jr Programmer 1">Jr Programmer 1</option>
			<option value="Jr Programmer 2">Jr Programmer 2</option>
			<option value="Analyzer">Analyzer</option>
		</select><br><br>
		
		<input type="submit" value="Register">
	</form>
	<hr>
	<button onclick="window.location.href='adminHome.php'">Admin Home</button>
	<button onclick="window.location.href='logOut.php'">Log Out</button>
	</body>

</html>