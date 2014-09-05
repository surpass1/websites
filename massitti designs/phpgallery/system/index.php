<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Massitti Panel</title>
<style type="text/css">
#opr{
	border:1px dashed #CCCCCC;
	padding:5px;
	width:300px;
	float:left;
	
	}
#fr_opr{
	width:650px;
	border:1px solid #666;
	padding:10px;
	margin:5px;
	float:left;
	}
</style>
<link rel="stylesheet" type="text/css" href="../../massitti/bootstrap.css">
<script type="text/javascript" src="../lib_js/jquery2.0.3.js">
</script>
<script type="text/javascript">
$(document).ready(function(e) {
   var opr=$("#opr ul li a");
   
   opr.click(function(){
	  var opr_click=$(this).attr('rel');
		
	switch(opr_click){
		case "add_pro":
			$("#fr_opr").load("../image.php");
			break;
		case "v_pro":
			$("#fr_opr").load("products/view_pro.php");	
			break;
		
		case "b_pro":
			$("#fr_opr").load("products/blogview.php");	
			break;
		case "e_pro":
			$("#fr_opr").load("products/contacts.php");	
			break;
			
		}  	  
   });  
});
</script>
</head>

<body class="form-actions">

<div id="opr">
	
	<h2>Manage Design </h2>
    
    <ul type="square">
        <li><a href="#" rel="add_pro">Add Products/Image</a></li>
        <li><a href="#" rel="v_pro">Manage Products</a></li>
        <li><a href="#" rel="b_pro">Manage blog post</a></li>
        <li><a href="#" rel="e_pro">Manage Emails</a></li>
           
    </ul>
</div>
<div id="fr_opr" class="btn">
	Massitti Designs backend <b style="margin-left:350px;"><a href="logout.php">Logout</a></b>
    
</div>


</body>
</html>