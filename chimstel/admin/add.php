<?php session_start();

if(!$_SESSION['username']){
	header("location:login.php");
}

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
	<div class="container well">
	<div class="row-fluid span12">
    <div class="navbar">
    <div>
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

     <li class="dropdown active">
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

<form class="offset4" id="form1"  name="form1" method="post" action="" enctype="multipart/form-data" >
           <div><input name="imagepath" type="file" id="imagepath"/></div><br/>
           <div>
           	<select name="category" id="category" placeholder="Category">
                <option selected>phone</option>
                <option>promotion</option>
                <option>advert</option>
                <option>accessories</option>
                <option>others</option>
              
            </select>
            </div>
            <div><input name="productname" type="text" id="productname" placeholder="Product Name"/></div>
            <div><input name="productprice" type="text" id="productprice" placeholder="Product Price"/></div>
           
           <div><textarea name="description"  rows="5" id="description" placeholder="Description"></textarea></div>
           <div><input name="reset" class=" btn btn-inverse offset1" type="reset" id="reset" value="Reset" />&nbsp;&nbsp;<input name="add" class="btn" type="submit" id="add" value="Add" /></div>
            <hr />  
           <?php 
			if(isset($_POST['add'])){
				
			$allowedExts = array("jpg", "jpeg", "gif", "png");
			$extension = end(explode(".", $_FILES["imagepath"]["name"]));
			if ((($_FILES["imagepath"]["type"] == "image/gif")
			|| ($_FILES["imagepath"]["type"] == "image/jpeg")
			|| ($_FILES["imagepath"]["type"] == "image/png")
			|| ($_FILES["imagepath"]["type"] == "image/pjpeg"))
			//&& ($_FILES["imagepath"]["size"] < 20000)
			&& in_array($extension, $allowedExts))
			  {
			  if ($_FILES["imagepath"]["error"] > 0)
				{
				echo "Return Code: " . $_FILES["imagepath"]["error"] . "<br>";
				}
			  else
				{
				echo "Upload: " . $_FILES["imagepath"]["name"] . "<br>";
				echo "Type: " . $_FILES["imagepath"]["type"] . "<br>";
				echo "Size: " . ($_FILES["imagepath"]["size"] / 1024) . " kB<br>";
				echo "Temp file: " . $_FILES["imagepath"]["tmp_name"] . "<br>";
			
				if (file_exists("../image/" . $_FILES["imagepath"]["name"])) 
				  {
				  echo $_FILES["imagepath"]["name"] . " already exists. ";
				  exit();
				  }
				else
				  {
				  move_uploaded_file($_FILES["imagepath"]["tmp_name"],
				  "../image/" . $_FILES["imagepath"]["name"]);
				  echo "Stored in: " . "image/" . $_FILES["imagepath"]["name"];
				  }
				}
			  }
			else
			  {
			  echo "Invalid file";
			  exit();
			  }
						
			$name = trim($_POST['productname']);
			$price = trim($_POST['productprice']);
			$category = (trim($_POST['category']));
			$description = (trim($_POST['description']));
			$imagepath = $_FILES["imagepath"]["name"];
						
			require_once("config.php");
	
			$query = "INSERT INTO products values('', '$name', '$price',
			          '$category', '$description', '$imagepath')";
			if(mysql_query($query))echo " ,Product Added"; else echo "Insertion failed";
			
				
			}
						
			?>
                    
</form>
</div>
</body>
</html>
