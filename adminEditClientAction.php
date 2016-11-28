<?php
	$name=$_POST["name"];
	$email=$_POST["email"];
	$birthday=$_POST["birthday"];
	$team=$_POST["team"];
	$position=$_POST["position"];
	$un=$_POST["hdnUN"];
	
	include("config.php");
	
	$insertClientInfo=mysql_query("UPDATE clientinfo SET Name='$name', Email='$email', Birthday='$birthday', Team='$team', Position='$position' WHERE Username= '$un' ");
	
	header("Location: adminViewAllClient.php");	
?>