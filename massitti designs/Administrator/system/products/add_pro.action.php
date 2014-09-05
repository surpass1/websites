<?php
require_once("../../../connect.php");
include("../lib/lib.php");

$pname=$_POST['pname'];
$pcode=$_POST['pcode'];
$desc=$_POST['desc'];


$sql_db="SELECT * FROM products_tbl WHERE code='$pcode'";
if(is_dp($sql_db)==true){
	echo "Data is Duplicated...";	
}

else{
	
	
	$ins_sql=mysql_query("INSERT INTO products_tbl 
						VALUES(
							NULL,
							'$pname',
							'$pcode',
							'$desc'
							'$location'
						)						
					");
	if($ins_sql)
		echo "Successfully inserted";
	else
		echo "Insert Error:".mysql_error();
	
}
?>