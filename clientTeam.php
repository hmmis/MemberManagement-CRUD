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
		<title>Client::My Team</title>
		<link rel="stylesheet" type="text/css" href="tableStyle.css">
	</head>
	<body>
	
		<hr>
		<table border="1">
			<tr>
				<th>Team Name</th>
				<th>Project Details</th>
				<th>View Project Member</th>
			<tr>
			
			<?php
				include("config.php");
				$teamName=$_SESSION["team"];
				$query="SELECT * FROM Project WHERE Team_Name= '$teamName' ";
				$result=mysql_query($query);
				
				
				while($res=mysql_fetch_array($result)){
					echo "<tr>";
						echo "<td>".$res['Team_Name']."</td>";
						echo "<td>".$res['Project']."</td>";
						echo "<td><a href=\"clientTeamMember.php\">View member</a></td>";
					echo "</tr>";
					
				}
			?>
		
		
		</table>
	
		<hr>
		<button onclick="window.location.href='clientHome.php'">My Home</button>
		<button onclick="window.location.href='logOut.php'">Log Out</button>
	</body>

</html>