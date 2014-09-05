<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Topbrainz</title>
        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
    	<?php
		//session_start();
        	include 'header.php';
		?>
    	<div>
            <form method="post" style="margin-left:300px;">
                <h3>Sign Up</h3>
                Already Signed Up? <a href="Login.html">Login Here</a><br/>
                <h4>Account Information</h4>               
                <input type="text" placeholder="Username" name="Username" style="width:300px;"></input><br/>
                <input type="text" placeholder="Email address" name="EmailAddress" style="width:300px;"></input><br/>
                <input type="password" placeholder="Password" name="Password" style="width:300px;"></input><br/>
                <input type="password" placeholder="Verify Password" name="VerifyPassword" style="width:300px;"></input>
                <label class="checkbox">
                    <input type="checkbox"></input>I agree with the Terms and Conditions
                </label>
                <input type="submit" value="Sign up" name="signUp" class="btn btn-primary"></input>
            </form>
            
            <?php
            	include 'connect.php';
				include 'functions.php';
				signup();
			?>
        </div>
    </body>
</html>