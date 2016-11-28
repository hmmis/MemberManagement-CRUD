<?php
	
	include("config.php");
	session_start();
	if(isset($_SESSION["UN"]))
	{
		
		$sUN=$_SESSION['UN'];
		
		
		//----------------getting name email birthday 
		$clientQuery="SELECT * FROM clientinfo WHERE Username = '$sUN'";
		$clientResult = mysql_query($clientQuery);
		
		while($res=mysql_fetch_array($clientResult)){
			$name=$res['Name'];
			$email=$res['Email'];
			$DoB=$res['Birthday'];
			$team=$res['Team'];
			$position=$res['Position'];
		}
		$_SESSION["team"]=$team;
		//----------------getting project 
		$projectQuery="SELECT * FROM Project WHERE Team_Name = '$team'";
		$projectResult = mysql_query($projectQuery);
		
		while($res1=mysql_fetch_array($projectResult)){
			
			$project=$res1['Project'];
		}
		
	}
	else
	{
		header("Location: index.php");	
	}
	
	
	

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Client:: MyHome</title>
		<style>
		body{
				font-size:20px;
			}
		</style>
	</head>
	<body>
		<hr>
		<p>Name: <?php echo $name; ?></p>
		<p>Email: <?php echo $email; ?></p>
		<p>Birthday: <?php echo $DoB; ?></p>
		<p>Current team: <?php echo $team; ?></p>
		<p>Current position: <?php echo $position; ?></p>
		<p>Current Projects: <?php echo $project; ?></p>
	
		<hr>
		<button onclick="window.location.href='clientTeam.php'">My Team</button>
		<button onclick="window.location.href='logOut.php'">Log Out</button>
	</body>

</html>