	<?php
		
		$user = "root";
		$host = "localhost";
		$password = "";
		
		$db = "topbrainz";
		
		if (mysql_connect($host, $user, $password)){		
			mysql_select_db($db);
			//echo "Connection successful";
		} else{
		 	echo "Cannot connect"; 	
		}
		
	?>