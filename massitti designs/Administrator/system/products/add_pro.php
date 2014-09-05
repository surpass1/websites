<script type="text/javascript">
$(document).ready(function(e) {
    $("#btn_add").click(function(){
		var pname=$("#pname_txt").val();
		var pcode=$("#pcode_txt").val();
		var desc=$("#desc_txt").val();
		var image=$("#image_txt").val();
		
		if(pname!="" && pcode!=""){
			$("#msg").load("products/add_pro.action.php",{
								"pname":pname,
								"pcode":pcode,
								"desc":desc,
								"image":image
							});	
			
		}	
		else
			$("#msg").text("Check and correct your inputs");
	});
});
</script>
<?php
	function textbox($id,$size){
		 $a='<input type="text" id='.$id.' size="'.$size.'" />';
		return $a;
		}
?>
	
<h3>Add Products</h3>
<form method="post">
<table border="0" width="100%" cellspacing="0" cellpadding="5">
	<tr>
    	<td>Product name:</td>
        <td><?php echo textbox('pname_txt',50);?></td>
    </tr>
    <tr>
    	<td>Product code:</td>
        <td>
        	<select id="pcode_txt">
            	<option>fountain</option>
                <option>garden</option>
                <option>paving</option>
                <option>waterfall</option>
            </select>
        </td>
    </tr>
    <tr>
    	<td>Description:</td>
        <td>
        	<textarea id="desc_txt" rows="4" cols="50"></textarea>
        </td>
    </tr>
    <tr>
    	<td>Image:</td>
        <td>
        	<input type = "file" id="image_txt">
        </td>
    </tr>
    <tr>
    	<td></td>
        <td>
        	<input type="button" value="Add Products" id="btn_add">
            <a href="#">Cancel</a>
        </td>
    </tr>

</table>
</form>
<div id="msg" align="center"></div>