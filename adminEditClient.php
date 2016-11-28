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
<?php
		$un=$_GET['editUN'];
		include("config.php");
		//----------------getting name email birthday 
		$clientQuery="SELECT * FROM clientinfo WHERE Username = '$un'";
		$clientResult = mysql_query($clientQuery);
		
		while($res=mysql_fetch_array($clientResult)){
			$name=$res['Name'];
			$email=$res['Email'];
			$DoB=$res['Birthday'];
		}
	

?>

<html>
	<head>
		<title>Admin::Edit Client</title>
		<link rel="stylesheet" type="text/css" href="formStyle.css">
	</head>
	<body>
	<hr>
	<form action="adminEditClientAction.php" method="post">
		Name:
		<input type="text" name="name" value="<?php echo $name;?>" ><br><br>
		Email:
		<input type="text" name="email" value="<?php echo $email;?>" ><br><br>
		Birthday:
		<input type="date" name="birthday" value="<?php echo $DoB;?>"><br><br>
		*Current Team:
		<select name="team">
			<option value="Team A">Team A</option>
			<option value="Team B">Team B</option>
			<option value="Team C">Team C</option>
			<option value="Team D">Team D</option>
			<option value="Team E">Team E</option>
		</select><br><br>
		
		*Current Position:
		<select name="position">
			<option value="Head">Head</option>
			<option value="Sr Programmer">Sr Programmer</option>
			<option value="Jr Programmer 1">Jr Programmer 1</option>
			<option value="Jr Programmer 2">Jr Programmer 2</option>
			<option value="Analyzer">Analyzer</option>
		</select><br><br>
		
		<input type="submit" value="Edit Change">
		<input type="hidden" name="hdnUN" value="<?php echo $un;?>">
	</form>
	<hr>
	<button onclick="window.location.href='adminViewAllClient.php'">View Client</button>
	<button onclick="window.location.href='adminHome.php'">Home</button>
	<button onclick="window.location.href='logOut.php'">Log Out</button>
	</body>

</html>