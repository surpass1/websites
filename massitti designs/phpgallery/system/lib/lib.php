<?php
function is_dp($sql){
	$sqlch=mysql_query($sql);
	$count=mysql_num_rows($sqlch);
	
	if($count>0)
		return true;
	else
		return false;		
}

?>