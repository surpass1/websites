<?php
require_once("../../../connect.php");
$opr="";
$p_id="";

if(isset($_POST['opr']))
	$opr=$_POST['opr'];
if(isset($_POST['p_id']))
	$p_id=$_POST['p_id'];
//-----------------delete Operation -------------
if($opr=="del"){
	$del_sql=mysql_query("DELETE FROM products_tbl 
							WHERE 
								p_id=$p_id	
						");
	if(!$del_sql)
		echo "Delete Error:".mysql_error();
}		
?>
<script type="text/javascript">
$(document).ready(function(e) {
    //----------------delete click--------------
	$(".del").click(function(){
		var p_id=$(this).attr("rel");
		
		$.post("products/view_pro.php",{
										 "opr":"del",
										 "p_id":p_id
										},
							function(){
								alert("Delete Success!");
						$("#data").load("products/view_pro.php");
								}
							);
	});
	//--------------upd click------------------
	$(".upd").click(function(){
		var p_id=$(this).attr("rel");
		$("#fr_opr").load("products/view_pro.php",
							{"opr":"upd",
							 "p_id":p_id
							});	
	});	
//-------------------------save data to database--------
$("#btn_save").click(function(){
		var pname=$("#pname_txt").val();
		var pcode=$("#pcode_txt").val();
		var desc=$("#desc_txt").val();
		//alert("test");
		$("#st_upd").load("products/view_pro.php #st_upd",
								{
								  "opr":"save_data",
								  "p_id":'<?php echo $p_id;?>',
								  "pname":pname,
								  "pcode":pcode,
								  "desc":desc
						});
		
	});
});
</script>
<?php session_start(); ?>
<div id="data">
<p>View, Edit and Delete Items  <a href="../logout.php">Logout</a></p>
<div id="st_upd">
<?php
if($opr=="save_data"){
	$pname=$_POST['pname'];
	$pcode=$_POST['pcode'];
	$desc=$_POST['desc'];
	
	$upd_sql=mysql_query("UPDATE products_tbl
											SET
												pname='$pname',
												CODE='$pcode',
												description='$desc'
											WHERE
												p_id=$p_id					
						 ");
	if($upd_sql)
		echo "Update Successful";
	else
		echo "Update Failure :".mysql_error();
}
?>
</div>
<?php 
if($opr=="upd"){
 $r_sql=mysql_query("SELECT * FROM products_tbl WHERE p_id=$p_id");
 $rw=mysql_fetch_array($r_sql);
?>

<div id="form_upd">
<form method="post"  class="form-actions">
<table border="0" width="100%" cellspacing="0" cellpadding="5">
	<tr>
    	<td>Product Name:</td>
        <td><input type="text" id="pname_txt" value="<?php echo $rw['pname'];?>" size="50"></td>
    </tr>
    <tr>
    	<td>Product category:</td>
        <td><input type="text" value="<?php echo $rw['code'];?>" id="pcode_txt" size="50"></td>
    </tr>
    <tr>
    	<td>Description:</td>
        <td>
        	<textarea id="desc_txt" rows="4" cols="50"><?php echo $rw['description'];?></textarea>
        </td>
    </tr>
    <tr>
    	<td></td>
        <td>
        	<input type="button" value="Save Products" id="btn_save">
            <a href="#">Cancel</a>
        </td>
    </tr>

</table>
</form>
</div>
<?php
}
?>
<?php
if($opr=="view" or $opr==""){
?>
<table border="1" width="100%" cellpadding="4" cellspacing="0">
	<tr style="background:#038; color:#FFF;">
    	<th>No</th>
        <th>Items</th>
        <th>Category</th>
        <th>Description</th>
        <th colspan="2">Operation</th>
    </tr>
<?php
$vsql=mysql_query("SELECT * FROM products_tbl ORDER BY pname");
$i=0;
while($rw=mysql_fetch_array($vsql)){
$i++;
?>
	<tr>
    	<td><?php echo $i;?></td>
        <td><?php echo $rw['pname'];?></td>
        <td><?php echo $rw['pcode'];?></td>
        <td><?php echo $rw['description'];?></td>
        <td><a href="#" class="upd" rel="<?php echo $rw['p_id'];?>">Upd</a></td>
        <td><a href="#" class="del" rel="<?php echo $rw['p_id'];?>">Del</a></td>
    </tr>
<?php	
}
?>
</table>
<?php
}
?>
</div>