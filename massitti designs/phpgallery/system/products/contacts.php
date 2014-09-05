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
		$del_sql=mysql_query("DELETE FROM contact 
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
			
			$.post("products/contacts.php",{
											 "opr":"del",
											 "id":id
											},
								function(){
									alert("Delete Success!");
							$("#data").load("products/contacts.php");
									}
								);
		});
		//--------------upd click------------------
		$(".upd").click(function(){
			var id=$(this).attr("rel");
			$("#fr_opr").load("products/contacts.php",
								{"opr":"upd",
								 "id":id
								});	
		});	
	//-------------------------save data to database--------
	$("#btn_save").click(function(){
			var sender_name=$("#pname_txt").val();
			var sender_email=$("#pcode_txt").val();
			var message=$("#desc_txt").val();
			//alert("test");
			$("#st_upd").load("products/blogview.php #st_upd",
									{
									  "opr":"save_data",
									  "id":'<?php echo $id;?>',
									  "sender_name":sender_name,
									  "sender_email":sender_email,
									  "message":message
							});
			
		});
	});
	</script>
	<?php session_start(); ?>
	<div id="data">
	<h4 class="btn btn-block">View, Edit and Delete Items  <a href="../logout.php">Logout</a></h4>
	<div id="st_upd">
	<?php
	if($opr=="save_data"){
		$sender_name=$_POST['sender_name'];
		$sender_email=$_POST['sender_email'];
		$message_POST['message'];
		
		$upd_sql=mysql_query("UPDATE contact
												SET
													sender_name='$name',
													sender_email='$sender_email',
													message='$message'
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
	 $r_sql=mysql_query("SELECT * FROM contact WHERE id=$id");
	 $rw=mysql_fetch_array($r_sql);
	?>
	
	<div id="form_upd">
	<form method="post"  class="form-actions">
	<table border="0" width="100%" cellspacing="0" cellpadding="5">
		<tr>
			<td>Sender Name:</td>
			<td><input type="text" id="pname_txt" value="<?php echo $rw['sender_name'];?>" size="50"></td>
		</tr>
		<tr>
			<td>Sender Mail:</td>
			<td><input type="text" value="<?php echo $rw['sender_email'];?>" id="pcode_txt" size="50"></td>
		</tr>
		<tr>
			<td>Message:</td>
			<td>
				<textarea id="desc_txt" rows="4" cols="50"><?php echo $rw['message'];?></textarea>
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
	<table border="0" width="100%" cellpadding="4" cellspacing="0">
		<tr style="background:#038; color:#FFF;">
			<th>No</th>
			<th>Sender</th>
			<th>Email</th>
			<th>Message</th>
			<th colspan="2">Operation</th>
		</tr>
	<?php
	$vsql=mysql_query("SELECT * FROM contact ORDER BY sender_name");
	$i=0;
	while($rw=mysql_fetch_array($vsql)){
	$i++;
	?>
		<tr>
			<td class="well"><?php echo $i;?></td>
			<td class="well"><?php echo $rw['sender_name'];?></td>
			<td class="well"><?php echo $rw['sender_email'];?></td>
			<td class="well"><?php echo $rw['message'];?></td>
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