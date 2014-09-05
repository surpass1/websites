<?php
require_once("../connect.php");
$uname=$_POST['username'];
$pwd=$_POST['password'];



$sql=mysql_query("SELECT * FROM users_tbl 
					WHERE
						uname='$uname' AND
						password='$pwd'
					");

$count=mysql_num_rows($sql);
if($count>0){
	echo true;
}
else
	echo "Login not true";
?>s