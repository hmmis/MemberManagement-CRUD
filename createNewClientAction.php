<?php
	$username=$_POST["username"];
	$password=$_POST["password"];
	$name=$_POST["name"];
	$email=$_POST["email"];
	$birthday=$_POST["birthday"];
	$team=$_POST["team"];
	$position=$_POST["position"];
	
	include("config.php");
	
	$insertLogInDb=mysql_query("INSERT INTO logindb(Username,Password) VALUES('$username','$password')");
	$insertClientInfo=mysql_query("INSERT INTO clientinfo(Username, Name, Email, Birthday, Team, Position) VALUES('$username' , '$name' , '$email' , '$birthday' , '$team' , '$position')");
	
	header("Location: adminHome.php");	
?>