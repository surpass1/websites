<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Our news</title>
<link rel="stylesheet" type="text/css" href="../a_data/bootstrap-responsive.css" />
<link rel="stylesheet" href="../a_data/bootstrap.css" type="text/css" />

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
     
     <li class="dropdown active">
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


		<hr />

 
		<form class="offset2" action="" method="post">
            <div><input class="input-xxlarge" name="title" type="text" id="productname" placeholder="News title"/></div>
            <div><textarea class="input-xxlarge" name="description"  rows="7" id="description" placeholder="News description"></textarea></div>
            <div><input name="reset" class=" btn btn-inverse offset6" type="reset" id="reset" value="Reset" />&nbsp;&nbsp;<input name="addnews" class="btn" type="submit" id="add" value="Add" /></div>
       </form>
		<?php
		if(isset($_POST['addnews'])){
            $title = trim($_POST['title']);
			$description = (trim($_POST['description']));
			$date=date("Y/m/d g:i:s a");
			if(!$title || !$description){
				echo "Fill in the Empty fields";
			}
			else{
			require_once("config.php");
	
			$query = "INSERT INTO news values('', '$title', '$description', '$date')";
			if(mysql_query($query))echo " ,News Added"; else echo "Insertion failed";
			
				
			}
		}
		?>
        
        <hr />
        	<a href="deleteNews.php" class="btn-link" >Edit News</a>
          </div>  
         </div>  
        </div>  
        
        
     </div>
           
</body>
</html>