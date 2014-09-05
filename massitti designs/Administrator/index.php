<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Massitti login</title>
<link rel="stylesheet" type="text/css" href="../massitti/bootstrap.css" />
<script type="text/javascript" src="lib_js/jquery2.0.3.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
    $("#btn_log").click(function(){
		var uname=$("#unametxt").val();
		var pwd=$("#pwdtxt").val();
		
		if(uname!="" && pwd!=""){
			$.post("check_log.php",
							{
								"username":uname,
								"password":pwd
							},function(data){
								if(data==true)
									location.href="system/";
								else
									$("#msg").text(data);
								});		
		}	
		else{
			$("#msg").text("Please enter username and password!");
		}
	});
});

</script>
</head>

<body>
<div class="row">
    <div class="span4"></div>
        <div class="span6">
			<h2 align="center">Massitti Login</h2>
				<form method="post" class="form-actions">
					
        			<div class="offset1"><input type="text" id="unametxt" size="35" class="btn-large" placeholder="Username"></div>
       				<div class="offset1"><input type="password" id="pwdtxt" size="35" class="btn-large" placeholder="Password	"></div>
       				<div class="offset1"><input type="button" id="btn_log" value="Login Now" class=" btn btn-large btn-primary"></div>
            		
     
				</form>
				<p id="msg" style="color:red; font-size:20px; text-align:center; padding:15px;"></p>
         </div>
    </div>
                
</body>
</html>