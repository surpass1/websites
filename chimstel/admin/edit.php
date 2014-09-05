<?php session_start();

if(!$_SESSION['username'])
	header("location:login.php");


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="stylesheet" type="text/css" href="../a_data/bootstrap-responsive.css" />
<link rel="stylesheet" href="../a_data/bootstrap.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Edit</title>
</head>
<body>
	<div class="container modal btn">
	<div class="row-fluid span12">
    <div class="navbar">
    <div class="">
    	<a class="brand" href="home.php"><font class="text-info">Chims</font><font class="text-error">Telecom</font></a>
    <div class="container">
     
     <ul class="nav">
     <li class="dropdown">
     <a href="../index.php">
		Back to Home
		</a>
     </li>
     <li class="dropdown active">
     <a href="edit.php"><i class="icon-pencil"></i>
		Edit Product
		</a>
     </li>
	<li class="dropdown">
     <a href="email.php"><i class="icon-pencil"></i>
		Email Msgs
		</a>
     </li>

     <li class="dropdown">
     <a href="add.php">
     	Add Product
     </a>
     </li>
     
     <li class="dropdown">
     <a href="news.php">
     	Add News
     </a>
     </li>
     
     <li class="pull-right">
     <a href="logout.php">
     	Logout
     </a>
     </li>
     </ul>
    </div>
    </div>
    

</div><br/><br/>

<form id="form1" name="form1" method="post" action="">
  <table width="486" height="202" border="0" align="center">
    <tr>
      <td width="175" height="53" valign="top">
	  <hr />  
	  <label>
      
	    <?php 
	  require_once("config.php");
	  
	  $query = "SELECT productname FROM products";
	  
	  $result = mysql_query($query);
	  	  
	  echo'<select name="productname" class="btn-xxlarge" id="productname">';
	  
	  while($productname = mysql_fetch_array($result)){
	  
	  echo'<option>';
	  echo $productname['productname'];
	  echo'<option/>';
	  
	  }
	  
	  echo'</select>';
	  
	  ?>
      
      
	    <a class="icon-edit"></a><input class="btn-large" name="edit" type="submit" id="edit" value="Edit" />
	 	 <hr />
	  <?php 
	  if(isset($_POST['edit'])){
	  
	  $productname = ($_POST['productname']);
	  $_SESSION['productname'] = $productname;
	  header("location:update.php");
	    
	  
	  }
	    
	  
	  ?>
	  </label></td>
    </tr>
    <tr>
      <td height="83" valign="top">&nbsp;</td>
    </tr>
  </table>
</form>
</div>
</body>
</html>
