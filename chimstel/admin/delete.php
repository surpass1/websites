<?php


?>
<?php
	require '../connect.php';
	$ids=$_GET['id'];
	$delqry="delete from messages where msgid='".$ids."'";
	if ($query_run= mysql_query($delqry)){
	echo 'Deleted';
	}

?>