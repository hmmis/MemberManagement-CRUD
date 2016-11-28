<?php
	
	include("config.php");
	session_start();
	if(isset($_SESSION["UN"]))
	{
		
		$un=$_GET['detailsUN'];
		
		
		//----------------getting name email birthday 
		$clientQuery="SELECT * FROM clientinfo WHERE Username = '$un'";
		$clientResult = mysql_query($clientQuery);
		
		while($res=mysql_fetch_array($clientResult)){
			$name=$res['Name'];
			$email=$res['Email'];
			$DoB=$res['Birthday'];
			$team=$res['Team'];
			$position=$res['Position'];
		}
		//$_SESSION["team"]=$team;
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
		<title>Admin:: View Client Details</title>
		<style>
			body{
				font-size:20px;
			}
		</style>
	</head>
	<head>
		<title>View Client Details</title>
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
		<button onclick="window.location.href='adminViewAllClient.php'">View Client</button>
		<button onclick="window.location.href='adminHome.php'"> Home</button>
		<button onclick="window.location.href='logOut.php'">Log Out</button>
	</body>

</html>