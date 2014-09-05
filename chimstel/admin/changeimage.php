<?php
session_start();
if(!$_SESSION['username'])
	header("location:login.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="../a_data/bootstrap-responsive.css" />
<link rel="stylesheet" href="../a_data/bootstrap.css" type="text/css" />


<script language="javascript" type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Update</title>


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
     <a href="../home.html">
		Back to Home
		</a>
     </li>
     <li class="dropdown">
     <a href="edit.php"><i class="icon-pencil"></i>
		Edit
		</a>
     </li>
     <li class="dropdown">
     <a href="add.php">
     	Add
     </a>
     </li>
	<li class="dropdown active">
     <a href="add.php">
     	Update
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

<?php 

require_once 'config.php';
$productname = $_SESSION['productname'];
$query = "SELECT id, imagepath
		  FROM products WHERE productname='$productname'";
$result = mysql_query($query);
$assoc = mysql_fetch_assoc($result);

$imgpath = $assoc['imagepath'];
$src = "../images/".$imgpath;


?>

<form id="form1"  name="form1" method="post" action="" enctype="multipart/form-data" >
			<div><img src="<?php echo $src ?>" alt="product image" width="150" height="150" /></div>
           <div><input type="file" name="imagepath" id="imagepath" /><input type="submit" value="Change Image" class="btn" name="changeimage" id="changeimage" />
           
           
           </div><br/>
</form>
			<?php 
			if(isset($_POST['changeimage'])){
				
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

			  $imagepath = $_FILES["imagepath"]["name"];
			  
			  require_once("config.php");
			  
			  $query = "UPDATE products SET imagepath='$imagepath' WHERE id='".$assoc['id']."'";
			  if(mysql_query($query)){
				unlink($src);
				header("location:update.php");
			  }
				else echo "Update failed";
			  	
			  }
           ?>
</div>
</body>
</html>