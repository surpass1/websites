<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="login.css" />
<link rel="stylesheet" type="text/css" href="../a_data/bootstrap.css" />
<title>Login</title>
</head>

<body>
<div class="btn-mini"></div>
<div class="modal btn" >
  <p>&nbsp;</p>
  <p class="pull-left"><a href="../home.php">Back to Home</a></p><br />
  <p><h2 align="center" class="text-info">Chims Administrator Login</h2></p>
  <hr />
  <form id="form1" name="form1" method="post" action="">
    <div align="center">
            
        <label for="username"></label>
        <input type="text" name="username" class="btn-large" id="username" placeholder="Enter Username" />
      <br/>
      
        <label for="password"></label>
        <input type="password" name="password" class="btn-large" id="password" placeholder="Enter Password" />
      
      <p>	
        <input type="submit"  class="btn btn-large offset1" name="login" id="login" value="Login" />
      <?php 
	  if(isset($_POST['login'])){
		  
    	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
		}
		  
		  $username = clean($_POST['username']);
		  $password = clean($_POST['password']);
		  
		  require_once('config.php');
		  
		  $qry = "SELECT * FROM administrator WHERE username = '$username' AND password = '$password'";
		  
		  $result = mysql_query($qry);
		  
		  if(mysql_num_rows($result) == 1){
			  	session_start();
		  		$_SESSION['username'] = $username;
				
		  		header("location: edit.php");
				
		  }
		  else
		  		echo"No such user";
		  }
		  ?>
          
          </p>
    </div>
  </form>
  <hr />
<p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
</body>
</html>