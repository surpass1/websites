<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TopBrainz Africa</title>
<link href="assets/css/bootstrap.css" rel="stylesheet">
</head>

<body>
	<?php
        include 'header.php';
	?>
	<div style="height:100px;">
    	<form method="post">
        	<h4>Sign in here</h4>
        	<input type="text" placeholder="Email" style="width:300px;" name="EmailAddress"/><br/>
            <input type="password" placeholder="Password" style="width:300px;" name="Password"/><br/>
            <input type="submit" value="Sign in" name="sign_in" class="btn btn-primary" style="width:100px;"/>
            <p><a href="#">Forgot your password?</a></p>
        </form>
        <?php
			include "connect.php";
			include "functions.php";
			signIn();	
									
			
		?>
    </div>
</body>
</html>