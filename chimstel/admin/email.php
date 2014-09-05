<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../a_data/bootstrap-responsive.css" />
<link rel="stylesheet" href="../a_data/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="../styles.css" />
<link rel="stylesheet" href="../a_data/theme.css" />

<title>Email Messages</title>
</head>

<body>
	<div class="container well">
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
     <li class="dropdown">
     <a href="edit.php"><i class="icon-pencil"></i>
		Edit Product
		</a>
     </li>
	<li class="dropdown active">
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
    </div>

</div><hr />
	<div class="row-fluid">
       
        <div>
            
             <?php
			  
				  
				  require '../connect.php';
				  require '../functions.php';
				  messages();
					
			 ?>
            
            
         </div><!-- .module_cont -->
</div><!-- .row-fluid -->

</body>
</html>