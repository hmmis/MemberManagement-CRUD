<?php
	include("config.php");
	
	//getting Id from url
	$userName = $_GET['deleteUN'];
	
	$result = mysql_query("DELETE FROM clientinfo WHERE Username='$userName' ");
	$result1 = mysql_query("DELETE FROM logindb WHERE Username= '$userName' ");
	
	header("Location:adminViewAllClient.php");
	
?>