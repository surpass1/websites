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
		$del_sql=mysql_query("DELETE FROM blog 
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
			
			$.post("products/blogview.php",{
											 "opr":"del",
											 "id":id
											},
								function(){
									alert("Delete Success!");
							$("#data").load("products/blogview.php");
									}
								);
		});
		//--------------upd click------------------
		$(".upd").click(function(){
			var id=$(this).attr("rel");
			$("#fr_opr").load("products/blogview.php",
								{"opr":"upd",
								 "id":id
								});	
		});	
	//-------------------------save data to database--------
	$("#btn_save").click(function(){
			var message=$("#pname_txt").val();
			var sender=$("#pcode_txt").val();
			var location=$("#desc_txt").val();
			//alert("test");
			$("#st_upd").load("products/blogview.php #st_upd",
									{
									  "opr":"save_data",
									  "id":'<?php echo $id;?>',
									  "message":message,
									  "sender":sender,
									  "location":location
							});
			
		});
	});
	</script>
	<?php session_start(); ?>
	<div id="data">
	<h4 class="btn btn-block">View, Edit and Delete Items  <span style="margin-left:200px"><a href="logout.php">Logout</a></span></h4>
	<div id="st_upd">
	<?php
	if($opr=="save_data"){
		$message=$_POST['message'];
		$sender=$_POST['sender'];
		$location=$_POST['location'];
		
		$upd_sql=mysql_query("UPDATE blog
												SET
													message='$message',
													sender='$sender',
													location='$location'
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
	 $r_sql=mysql_query("SELECT * FROM blog WHERE id=$id");
	 $rw=mysql_fetch_array($r_sql);
	?>
	
	<div id="form_upd">
	<form method="post"  class="form-actions">
	<table border="0" width="100%" cellspacing="0" cellpadding="5">
		<tr>
			<td>Product Name:</td>
			<td><input type="text" id="pname_txt" value="<?php echo $rw['message'];?>" size="50"></td>
		</tr>
		<tr>
			<td>Product category:</td>
			<td><input type="text" value="<?php echo $rw['sender'];?>" id="pcode_txt" size="50"></td>
		</tr>
		<tr>
			<td>Description:</td>
			<td>
				<textarea id="desc_txt" rows="4" cols="50"><?php echo $rw['location'];?></textarea>
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
		<tr style="background:#C4FDFC; color:#333;">
			<th>No</th>
			<th>Message</th>
			<th>Sender</th>
			<th>Location</th>
			<th colspan="2">Operation</th>
		</tr>
	<?php
	$vsql=mysql_query("SELECT * FROM blog ORDER BY sender");
	$i=0;
	while($rw=mysql_fetch_array($vsql)){
	$i++;
	?>
		<tr>
			<td class="well"><?php echo $i;?></td>
			<td class="well"><?php echo $rw['message'];?></td>
			<td class="well"><?php echo $rw['sender'];?></td>
			<td class="well"><?php echo $rw['location'];?></td>
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