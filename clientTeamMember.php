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
		<title>Client:: Team Member</title>
		<link rel="stylesheet" type="text/css" href="tableStyle.css">
	</head>
	<body>
	
		<hr>
		<table border="1">
			<tr>
				<th>Position</th>
				<th>Member Name</th>
				<th>Member Email</th>
				<th>Member Birthday</th>
				
			<tr>
			
			<?php
				include("config.php");
				$teamName=$_SESSION["team"];
				
				$query="SELECT * FROM clientinfo WHERE Team = '$teamName' ";
				$result=mysql_query($query);
				
				
				while($res=mysql_fetch_array($result)){
					echo "<tr>";
						echo "<td>".$res['Position']."</td>";
						echo "<td>".$res['Name']."</td>";
						echo "<td>".$res['Email']."</td>";
						echo "<td>".$res['Birthday']."</td>";
					echo "</tr>";
					
				}
			?>
		
		
		</table>
	
		<hr>
		<button onclick="window.location.href='clientHome.php'">My Home</button>
		<button onclick="window.location.href='clientTeam.php'">My Team</button>
		<button onclick="window.location.href='logOut.php'">Log Out</button>
	</body>

</html>