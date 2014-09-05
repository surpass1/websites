<?php session_start();
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
	<div class="container  well">
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
    </div>

</div><hr />

<?php 

require_once 'config.php';
$productname = $_SESSION['productname'];
$query = "SELECT id, productprice, category, description, imagepath
		  FROM products WHERE productname='$productname'";
$result = mysql_query($query);
$assoc = mysql_fetch_assoc($result);

$imgpath = $assoc['imagepath'];
$src = "../image/".$imgpath;


?>

<form id="updateform"  name="updateform" method="post" action="" enctype="multipart/form-data" >
			<div><img src="<?php echo $src ?>" alt="product image" width="150" height="150" /></div>
           <div><a href="changeimage.php">Change Image</a>
           </div><br/>
           <div><select name="category" id="category" placeholder="Category">
                <option selected><?php echo $assoc['category'];?></option>
                <?php 
                if($assoc['category']=="phone"){
                	echo'<option>';
					echo'others';
					echo'</option>';
                }
                else{ 
	                echo'<option>';
	                echo'phone';
	                echo'</option>';   
	            }    
	            
                ?>
                
              
            	</select>
            </div>
            <div><input name="productname" type="text" id="productname" placeholder="Product Name" value="<?php echo $productname; ?>"/></div>
            <div><input name="productprice" type="text" id="productprice" placeholder="Product Price" value="<?php echo $assoc['productprice'];?>"/></div>
           
           <div><textarea name="description"  rows="5" id="description" placeholder="Description"><?php echo $assoc['description'];?></textarea></div>
           <div><font style="float: left"><input name="delete" class="btn btn-inverse" type="submit" id="delete" value="Delete" onClick="return confirm('Are you sure You want to delete this product, the operation is irreversible')" /></font><font style="float: right"><input name="update" class="btn btn-primary" type="submit" id="update" value="update" /></font></div>
            <hr />
            <?php 
            if(isset($_POST['update'])){
						
			$name = trim($_POST['productname']);
			$price = trim($_POST['productprice']);
			$category = (trim($_POST['category']));
			$description = (trim($_POST['description']));
			
						
			require_once("config.php");
	
			$query = "UPDATE products SET productname='$name', productprice='$price', 
					  category='$category', description='$description', imagepath='$imagepath' WHERE id='".$assoc['id']."'";
			if(mysql_query($query))echo " ,Product Updated"; else echo "Insertion failed";

			}

			else if(isset($_POST['delete'])){
				require_once("config.php");
			
				$query = "DELETE FROM products WHERE id='".$assoc['id']."'";
				if(mysql_query($query)){
					header("location:edit.php");
					unlink($src);
					
				}
				 else echo "Deletion failed";
				
			
			}
			?>
</form>
<p>&nbsp;</p>

</body>
</html>