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
			$("#fr_opr").load("products/add_pro.php");
			break;
		case "v_pro":
			$("#fr_opr").load("products/view_pro.php");	
			break;
	}  	  
   });  
});
</script>
</head>

<body class="form-actions">
<hr>
<div id="opr">
	
	<strong>Manage Design</strong>
    <ul type="square">
        <li><a href="#" rel="add_pro">Add Products</a></li>
        <li><a href="#" rel="v_pro">View Products</a></li>
        <li><a href="#" rel="st_pro">Setting</a></li>    
    </ul>
</div>
<div id="fr_opr">Massitti Operatoin</div>


</body>
</html>