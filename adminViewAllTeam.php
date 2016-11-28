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
		<title>Admin:: View All Team</title>
		<link rel="stylesheet" type="text/css" href="tableStyle.css">
	</head>
	<head>
		<title>My Team</title>
	</head>
	<body>
	
		<hr>
		<table border="1">
			<tr>
				<th>Team Name</th>
				<th>Project Details</th>
				<th>View Project Member</th>
				<th>Edit Project Details</th>
			<tr>
			
			<?php
				include("config.php");
				$query="SELECT * FROM Project";
				$result=mysql_query($query);
				
				while($res=mysql_fetch_array($result)){
					echo "<tr>";
						$teamName=$res['Team_Name'];
						$project=$res['Project'];
						
						echo "<td>$teamName</td>";
						echo "<td>$project</td>";
						echo "<td><a href=\"adminViewTeamMember.php?TN=$teamName\">View member</a></td>";
						
						echo "<form action=\"adminEditProjectDetails.php\" method=\"POST\">";
						echo "<td><input type=\"text\" name=\"ChangeProject\" size=\"100\">";
						echo "<input type=\"hidden\" value=\"$teamName\" name=\"hdnValue\">";
						echo "<input type=\"submit\" name=\"btnSubmit\" value=\"Edit\"></td>";
						echo "</form>";
						
					echo "</tr>";
					
				}
			?>
		
		
		</table>
	
		<hr>
		<button onclick="window.location.href='adminHome.php'">Admin Home</button>
		<button onclick="window.location.href='logOut.php'">Log Out</button>
	</body>

</html>