<?php
	
	$givenUN=$_POST["username"];
	$givenPW=$_POST["password"];
	
	include("config.php");
	
	$query="SELECT * FROM logindb WHERE Username = '$givenUN' AND Password = '$givenPW' ";
	$result = mysql_query($query); 

	if( mysql_num_rows($result)==1 || ($givenUN=="admin" && $givenPW=="admin")){
		//Username Password match
		session_start();
		if($givenUN=="admin"){
			//admin
			$_SESSION["UN"] = "admin";
			header("Location:adminHome.php");
		}else{
			//client
			$_SESSION["UN"] = "$givenUN";
			header("Location:clientHome.php");
		}
	}else{
		//Username Password  not match
		header("Location:index.php");
	}


?>