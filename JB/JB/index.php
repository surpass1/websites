<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="../Home_files/bootstrap.min.css" type="text/css" media="screen">
	<link rel="stylesheet" href="../Home_files/bootstrap-responsive.min.css" type="text/css" media="screen">
	<title>JB International</title>
</head>
<body>
	<div class="span4"></div>
    
     <div class="span8" style="margin-top:100px;">
       <form class="form-signin" method="post" action="">
            <h2 class="form-signin-heading">Please sign in</h2>
            <input type="text" name="title" class="form-control span6" placeholder="Title" autofocus />
            <textarea rows="10" name="content" class="form-control span6" placeholder="Fellowship content"></textarea>
            <p><input class="btn btn-large btn-primary" type="submit" name="submit" value="Post to Fellowship"/s></p>
         </form>
        <?php 
			require 'connect.php';
			include 'functions.php';
			fellowship();
		?>
      </div>
     </body>
</html>