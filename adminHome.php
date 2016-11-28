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
<!DOCTYPE html>
<html>
	<head>
		<title>Admin:: Home</title>
		<link rel="stylesheet" type="text/css" href="adminHomeStyle.css">
	</head>
	<body>
		<h1 align="center">Admin:: Home</h1>
		<table>
			<tr>
				<td >
					<button onclick="window.location.href='adminViewAllTeam.php'">View Team</button>
				</td>
				<td rowspan="2" >
					<button id="btnCNC" onclick="window.location.href='createNewClient.php'">Create New Client</button>
				</td>
			</tr>
			<tr>
				<td >
					<button onclick="window.location.href='adminViewAllClient.php'">View Client</button>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<button id="btnLO" onclick="window.location.href='logOut.php'">Log Out</button>
				</td>
			</tr>
		</table>
		
		
	</body>

</html>