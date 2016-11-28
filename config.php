<?php
	
	$db=mysql_connect("localhost","root","") or die("cannot connected");
	
	@mysql_select_db("MemberManagement",$db);

?>