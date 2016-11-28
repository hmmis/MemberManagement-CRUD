<?php
	
	$teamName=$_POST['hdnValue'];
	$newProjectDetails=$_POST['ChangeProject'];
	
	include("config.php");

	
	$query="Update project SET Project= '$newProjectDetails' WHERE Team_Name= '$teamName'";
	$update=mysql_query($query);
	
	header("Location: adminViewAllTeam.php");
?>