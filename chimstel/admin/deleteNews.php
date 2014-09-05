<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete News</title>
	<link rel="stylesheet" type="text/css" href="../a_data/bootstrap-responsive.css" />
	<link rel="stylesheet" href="../a_data/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="../styles.css" />
	<link rel="stylesheet" href="../a_data/theme.css" />

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
     <a href="news.php">
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
    <div class="container-fluid">
	<?php	
				require '../connect.php';
  				$qry="SELECT * FROM news ORDER BY date DESC";
				if($query_run= mysql_query($qry)){
						
						if(mysql_num_rows($query_run)>0){
					
							$id=mysql_result($query_run,0,'id');
							$title=mysql_result($query_run,0,'title');
							$description=mysql_result($query_run,0,'description');
                           	$date=mysql_result($query_run,0,'date');
							
							$result = mysql_query( $qry );
										echo '<div align="center">';
										echo '<h3>News</h3>';
										echo '<div align="right">';
												$ids=$_GET['id'];
												if(isset($ids)){
												$delqry="delete from news where id='".$ids."'";
												if ($query_run= mysql_query($delqry)){
												echo '<b class="text-error">';
												echo 'Deleted';
												echo '</b>';
													}
											}
																					echo '</div>';
										
										echo '</div>';
							while ($result_row = mysql_fetch_row($result)){
                                                            
                                                            
															++$xx;

									
					echo '<div class="blog_info_block">
					<span class="author_name"><b>Title:</b><a>'. $result_row[1] . '</a></span>
					<b> Posted on:  </b><span class="date"><a>'. $result_row[3] . '</a></span>
				   
                                                    
					</div>
					<div class="well">
					<p><b style="color:red;"> &Rrightarrow;</b>'. $result_row[2] .'.</p>
					<div style="float:right" class="btn btn"><b><a href="?id='.$result_row[0].'" onclick="return confirm(\'Do you really want to delete this? Press Yes to continue.\')">Delete</a></b></div><br/>
				</div>  ';
								
                                                     
			}
	
		}
				else{
				echo '<div style="color:red; width:90%">No Messages Found</div> ';
				}
		}
		
	
        ?>
   </div>
</body>
</html>