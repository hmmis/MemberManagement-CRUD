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
		<title>Admin:: View All Client</title>
		<link rel="stylesheet" type="text/css" href="tableStyle.css">
	</head>
	<body>
		<hr>
		<table border="1">
			<tr>
				<th>Client Username</th>
				<th>Client Name</th>
				<th>Client Details</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php
				include("config.php");
				$query="SELECT * FROM clientinfo";
				$result=mysql_query($query);
				
				while($res=mysql_fetch_array($result)){
					echo "<tr>";
						echo "<td>".$res['Username']."</td>";
						echo "<td>".$res['Name']."</td>";
						echo "<td><a href=\"adminViewClientDetails.php?detailsUN=".$res['Username']."\">View Details</a></td>";
						echo "<td><a href=\"adminEditClient.php?editUN=".$res['Username']."\">Edit</a></td>";
						echo "<td><a href=\"adminDeleteClient.php?deleteUN=".$res['Username']."\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
					echo "</tr>";
				}
				
			
			
			?>
			
		
		</table>
		
		<hr>
		
		<button onclick="window.location.href='adminHome.php'">Admin Home</button>
		<button onclick="window.location.href='logOut.php'">Log Out</button>
	</body>

</html>