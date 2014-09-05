
<?php

	$host="localhost";
	$user="root";
	$pass="";
	$db="jb";
	if(mysql_connect($host,$user,$pass)){
		mysql_select_db($db);
				
	}
	else echo "Server is down";
?>