<?php
session_start();
require_once("../../../connect.php");
$opr="";
$id="";

if(isset($_POST['opr']))
	$opr=$_POST['opr'];
if(isset($_POST['id']))
	$id=$_POST['id'];
//-----------------delete Operation -------------
if($opr=="del"){
	$del_sql=mysql_query("DELETE FROM photos 
							WHERE 
								id=$id	
						");
	if(!$del_sql)
		echo "Delete Error:".mysql_error();
}		
?>
<script type="text/javascript">
$(document).ready(function(e) {
    //----------------delete click--------------
	$(".del").click(function(){
		var id=$(this).attr("rel");
		
		$.post("products/view_pro.php",{
										 "opr":"del",
										 "id":id
										},
							function(){
								alert("Delete Success!");
						$("#data").load("products/view_pro.php");
								}
							);
	});
	//--------------upd click------------------
	$(".upd").click(function(){
		var id=$(this).attr("rel");
		$("#fr_opr").load("products/view_pro.php",
							{"opr":"upd",
							 "id":id
							});	
	});	
//-------------------------save data to database--------
$("#btn_save").click(function(){
		var name=$("#pname_txt").val();
		var imagepath=$("#pcode_txt").val();
		var caption=$("#desc_txt").val();
		//alert("test");
		$("#st_upd").load("products/view_pro.php #st_upd",
								{
								  "opr":"save_data",
								  "id":'<?php echo $id;?>',
								  "name":name,
								  "imagepath":imagepath,
								  "caption":caption
						});
		
	});
});
</script>
<?php session_start(); ?>
<div id="data">
<p>View, Edit and Delete Items  <a href="logout.php">Logout</a></p>
<div id="st_upd">
<?php
if($opr=="save_data"){
	$name=$_POST['name'];
	$image=$_POST['imagepath'];
	$caption=$_POST['caption'];
	
	$upd_sql=mysql_query("UPDATE photos
											SET
												name='$name',
												imagepath='$image',
												caption='$caption'
											WHERE
												id=$id					
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
 $r_sql=mysql_query("SELECT * FROM photos WHERE id=$id");
 $rw=mysql_fetch_array($r_sql);
?>

<div id="form_upd">
<form method="post"  class="form-actions">
<table border="0" width="100%" cellspacing="0" cellpadding="5">
	<tr>
    	<td>Name:</td>
        <td><input type="text" id="pname_txt" value="<?php echo $rw['name'];?>" size="50"></td>
    </tr>
    <tr>
    	<td>Product category:</td>
        <td><input type="file" value="<?php echo $rw['imagepath'];?>" id="pcode_txt" size="50"></td>
    </tr>
    <tr>
    	<td>Description:</td>
        <td>
        	<textarea id="desc_txt" rows="4" cols="50"><?php echo $rw['caption'];?></textarea>
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
<table border="0" width="100%" cellpadding="4" cellspacing="0" class="table table-striped">
	<tr style="background:#C4FDFC; color:#333;">
    	<th>No</th>
        <th>Name</th>
        <th>Imagepath</th>
        <th>Description</th>
        <th colspan="2">Operation</th>
    </tr>
<?php
$vsql=mysql_query("SELECT * FROM photos ORDER BY name");
$i=0;
while($rw=mysql_fetch_array($vsql)){
$i++;
?>
	<tr>
    	<td><?php echo $i;?></td>
        <td><?php echo $rw['name'];?></td>
        <td><?php echo $rw['imagepath'];?></td>
        <td><?php echo $rw['caption'];?></td>
        <td><a href="#" class="upd btn btn-info" rel="<?php echo $rw['id'];?>">Update</a></td>
        <td><a href="#" class="del btn btn-warning" rel="<?php echo $rw['id'];?>">Del</a></td>
    </tr>
<?php	
}
?>
</table>
<?php
}
?>
</div>