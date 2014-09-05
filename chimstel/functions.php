<?php

 

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function phoneContact(){
    $query="SELECT * FROM contacts WHERE contact_type='phone'";
		if($query_run= mysql_query($query)){
						
						if(mysql_num_rows($query_run)>0){
					
								$id=mysql_result($query_run,0,'contactid');
								$type=mysql_result($query_run,0,'contact_type');
								$contact=mysql_result($query_run,0,'contact_value');
								$place=mysql_result($query_run,0,'location');
                                                                $extra=mysql_result($query_run,0,'maplink');
								
								$result = mysql_query( $query );
	
								//echo $id;//getting user id and echoling it in a browser
								while ($result_row = mysql_fetch_row($result)){
										
                                                                                echo '<b>'.$result_row[1].'</b>&nbsp;&nbsp;&nbsp;&nbsp;'. $result_row[2].','.$result_row[3].'<br/>';
       						 }
					 }
					else{
								echo '<div style="color:grey;">Contact to be Added Soon</div>';
						}
							
		}
                else{
								echo '<div style="color:grey;">Null</div>';
						}
	
    
}
function loggedin()
{//logged function
	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
		return true;
	}
	else {
		return false;
	}
}

function email(){
    if(isset($_POST['emails']) && isset($_POST['sentby']) && isset($_POST['subjects'])){
      $to=trim($_POST['emails']);
      $from=trim($_POST['sentby']);
   
      $subject=trim($_POST['subjects']);
      $email_data=trim($_POST['messages']);
      $emails='<b>From:</b> '.$from.'<br/>'.$email_data;
       //$from=$_POST[''];
      $header="From:" . $from;
      if(empty($to)){
          echo 'Enter Reciever Email<br/>';
      }
      if(empty($from)){
          echo '<b style="color :blue;">Enter Your email...</b><br/>';
      }
      if(empty($subject)){
          $subject=  getuserfield('username');
          
      }
    if(empty($email_data)){
        echo '<b style="color :blue;">No Information typed and can not send</b><br/>';
          
      }
 else {
   
  # Send email now
          
  $retval = mail($to,$subject,$emails,$header);
  if( $retval == true )
   {
      echo '<b style="color :blue;">Email sent successfully...</b><br/>';
   }
   else
   {
      echo '<b style="color :red;">Email could not be sent...</b><br/>';
   }
     
      }
    
    
    }
 else {
       echo '<b style="color :red;">Send New mail...</b>';    
    }
}

/*****************************products*********************************/
function phoneproducts(){
    //Latest products 
     
    $dbsquery="SELECT * FROM products WHERE category='phone' ORDER BY productname DESC";
    if($query_run= mysql_query($dbsquery)){
						
						if(mysql_num_rows($query_run)>0){
                                                                $id=mysql_result($query_run,0,'id');
								$name=mysql_result($query_run,0,'productname');
								$px=mysql_result($query_run,0,'productprice');
								$pdtc=mysql_result($query_run,0,'category');
                                                                $locatn=mysql_result($query_run,0,'location');
								$desc=mysql_result($query_run,0,'description');
                                                                $img=mysql_result($query_run,0,'imagepath');
                                                                
								
								$results = mysql_query($dbsquery);
	
								//echo $id;//getting user id and echoling it in a browser
								while ($result_row = mysql_fetch_row($results)){
										
                                       echo '<div class="span5" align="left"><p><font size="+1">'.$result_row[1].'</font><br/>
									   		<img src="image/'.$result_row[5].'" width="100px" height="60px"/>
											<br/>'. $result_row[4].'<hr class="light"></div>';
                                                                                
                                                                               

//   	echo '</p>';
                                                 }
					 }
					else{
								echo '<div style="color:grey;">More products to be Added Soon</div>';
						}e
							
		}
                else{
								echo '<div style="color:grey;">Null</div>';
						}
	
    
    
}

function accessories(){
    //Latest products 
     
    $dbsquery="SELECT * FROM products WHERE category='accessories' ORDER BY productname DESC";
    if($query_run= mysql_query($dbsquery)){
						
						if(mysql_num_rows($query_run)>0){
                                                                $id=mysql_result($query_run,0,'id');
								$name=mysql_result($query_run,0,'productname');
								$px=mysql_result($query_run,0,'productprice');
								$pdtc=mysql_result($query_run,0,'category');
                                                                $locatn=mysql_result($query_run,0,'location');
								$desc=mysql_result($query_run,0,'description');
                                                                $img=mysql_result($query_run,0,'imagepath');
                                                                
								
								$results = mysql_query($dbsquery);
	
								//echo $id;//getting user id and echoling it in a browser
								while ($result_row = mysql_fetch_row($results)){
										
                                       echo '<p><div class="span5 pull-left" align="left"><p><font size="+1">'.$result_row[1].'</font><br/><img src="image/'.$result_row[5].'" width="100px" height="60px"/></p><br/>'. $result_row[4].'<hr class="light"></p></div>';
                                                                                
                                                                               
$i=1; if($i%4==0){echo '<br/>'; } $i++;
echo '</p>';
                                                 }
					 }
					else{
								echo '<div style="color:grey;">More products to be Added Soon</div>';
						}
							
		}
                else{
								echo '<div style="color:grey;">Null</div>';
						}
	
    
    
}


function search(){
    //Latest products 
			 if(isset($_POST['s'])) {
            
     		$search = $_POST['s'];
            
            if(!empty($search)){
                echo '<h3 align="center"> Result(s) for '.$search.':</h3>';
                $squery="SELECT * FROM products WHERE productname LIKE '%".$search."%'";
                       // $squerya="SELECT * FROM products WHERE productdescription LIKE '%".$search."%'";
                if($query_run=mysql_query($squery)){
                    if(mysql_num_rows($query_run)>0){
                        
                                    $id=mysql_result($query_run,0,'id');
                                    $pdtname=mysql_result($query_run,0,'productname');
                                    $price=mysql_result($query_run,0,'productprice');
                                    $pdtc=mysql_result($query_run,0,'productcategory');
                                    $loc=mysql_result($query_run,0,'location');
                                                                $pdtdesc=mysql_result($query_run,0,'productdescription');
                                                                $imgp=mysql_result($query_run,0,'imagepapth');
                                                               
                                    
                                    $results = mysql_query( $squery);
                                                                //$result = mysql_query( $squerya);
                                    
                                    while ($result_row = mysql_fetch_row($results)){
                                
                                    echo  '<div class="span2 pull-left">
                                           <img src="image/'.$result_row[5].'" width="100px" height="100px""> </div>
										   <div class="span2 text-success"><span><h5> '.$result_row[1].'</span>:</h5>
										   <p> '.$result_row[4].'</p> ';
                                           
										   echo ' <hr class="light"/><br/>';
                                    if (++$xx%3==0){     echo '<hr/>';}
                                    echo '</div> ';
                                                       
                                  
                    }
                        
                        }
                        else{
                            echo '<h4 align="center" style="color:RED">'.$search.' Not Found</h4>';
                            }
            
    
}


}
			 }}
function otherproducts(){
    //Latest products 
     
    $dbsquery="SELECT * FROM products WHERE category='others' ORDER BY productname DESC";
    if($query_run= mysql_query($dbsquery)){
						
						if(mysql_num_rows($query_run)>0){
                                                                $id=mysql_result($query_run,0,'id');
								$name=mysql_result($query_run,0,'productname');
								$px=mysql_result($query_run,0,'productprice');
								$pdtc=mysql_result($query_run,0,'category');
                                                                $locatn=mysql_result($query_run,0,'location');
								$desc=mysql_result($query_run,0,'description');
                                                                $img=mysql_result($query_run,0,'imagepath');
                                                                
								
								$results = mysql_query($dbsquery);
	
								//echo $id;//getting user id and echoling it in a browser
								while ($result_row = mysql_fetch_row($results)){
									  echo '<p>';						
                                      echo '<div class="span5"><p><img src="image/'.$result_row[5].'" width="100px" height="60px" style="background:#fff;"/>'.$result_row[1].'<br/>'. $result_row[4].'<hr class="light"></p></div>';
									  echo '</p>';
       						 }                                $i=1; if($i%4==0){echo '<br/>'; } $i++;
					 }
					else{
								echo '<div style="color:grey;">More products to be Added Soon</div>';
						}
							
		}
                else{
								echo '<div style="color:grey;">Null</div>';
						}
	
    
    
}

function advert(){
    //Latest products 
     
    $dbsquery="SELECT * FROM products WHERE category='advert'";
    if($query_run= mysql_query($dbsquery)){
						
						if(mysql_num_rows($query_run)>0){
                                                                $id=mysql_result($query_run,0,'id');
								$name=mysql_result($query_run,0,'productname');
								$px=mysql_result($query_run,0,'productprice');
								$pdtc=mysql_result($query_run,0,'category');
                                                                $locatn=mysql_result($query_run,0,'location');
								$desc=mysql_result($query_run,0,'description');
                                                                $img=mysql_result($query_run,0,'imagepath');
                                                                
								
								$results = mysql_query($dbsquery);
	
								//echo $id;//getting user id and echoling it in a browser
								while ($result_row = mysql_fetch_row($results)){
										
                                       echo '<div class="row"><div class="span5"><p><img src="image/'.$result_row[5].'" width="100px" height="60px"/>'.$result_row[1].''. $result_row[4].'</div>';
                                                                                
                                                                               
$i=1;  $i++;
echo '</div>';
                                                 }
					 }
					else{
								echo '<div style="color:grey;">More products to be Added Soon</div>';
						}
							
		}
               
    
    
}

function promotion(){
    //Latest products 
     
    $dbsquery="SELECT * FROM products WHERE category='promotion' ORDER BY productname DESC";
    if($query_run= mysql_query($dbsquery)){
						
						if(mysql_num_rows($query_run)>0){
                                                                $id=mysql_result($query_run,0,'id');
								$name=mysql_result($query_run,0,'productname');
								$px=mysql_result($query_run,0,'productprice');
								$pdtc=mysql_result($query_run,0,'category');
                                                                $locatn=mysql_result($query_run,0,'location');
								$desc=mysql_result($query_run,0,'description');
                                                                $img=mysql_result($query_run,0,'imagepath');
                                                                
								
								$results = mysql_query($dbsquery);
	
								//echo $id;//getting user id and echoling it in a browser
								while ($result_row = mysql_fetch_row($results)){
									  echo '<p>';						
                                      echo '<div class="span5" align="left"><p><img src="image/'.$result_row[5].'" width="100px" height="60px"/>'.$result_row[1].'<br/>'. $result_row[4].'<hr class="light"></p></div>';
									  echo '</p>';
       						 }                                $i=1; if($i%4==0){echo ''; } $i++;
					 }
					else{
								echo '<div style="color:grey;">More products to be Added Soon</div>';
						}
							
		}
                else{
								echo '<div style="color:grey;">Null</div>';
						}
	
    
    
}

/*****************************close products**************************/
function location(){
     $query="SELECT * FROM contacts WHERE contact_type='location'";
		if($query_run= mysql_query($query)){
						
						if(mysql_num_rows($query_run)>0){
					
								$id=mysql_result($query_run,0,'contactid');
								$type=mysql_result($query_run,0,'contact_type');
								$contact=mysql_result($query_run,0,'contact_value');
								$place=mysql_result($query_run,0,'location');
                                                                $extra=mysql_result($query_run,0,'maplink');
								
								$result = mysql_query( $query );
	
								//echo $id;//getting user id and echoling it in a browser
								while ($result_row = mysql_fetch_row($result)){
					
					                   echo '<b>'.$result_row[1].'</b>&nbsp;&nbsp;&nbsp;&nbsp;'. $result_row[2].','.$result_row[3].'<br/>';
       						 }
					 }
					else{
								echo '<div style="color:grey;">Contact to be Added Soon</div>';
						}
							
		}
                else{
								echo '<div style="color:grey;">Null</div>';
						}
	
    
}
function emails(){
     $query="SELECT * FROM contacts WHERE contact_type='email'";
		if($query_run= mysql_query($query)){
						
						if(mysql_num_rows($query_run)>0){
					
								$id=mysql_result($query_run,0,'contactid');
								$type=mysql_result($query_run,0,'contact_type');
								$contact=mysql_result($query_run,0,'contact_value');
								$place=mysql_result($query_run,0,'location');
                                                                $extra=mysql_result($query_run,0,'maplink');
								
								$result = mysql_query( $query );
	
								//echo $id;//getting user id and echoling it in a browser
								while ($result_row = mysql_fetch_row($result)){
										
                                                                                echo '<b>'.$result_row[1].'</b>&nbsp;&nbsp;&nbsp;&nbsp;'. $result_row[2].','.$result_row[3].'<br/>';
       						 }
					 }
					else{
								echo '<div style="color:grey;">Contact to be Added Soon</div>';
						}
							
		}
                else{
								echo '<div style="color:grey;">Null</div>';
						}
	
    
}

function addcontact(){
    
      
			 	
if(isset($_POST['add'])&& isset($_POST['contacttype'])&& isset($_POST['location'])&& isset($_POST['contact']))
{


$contact_type = $_POST['contacttype'];
$value = $_POST['contact'];
$location = $_POST['location'];
$link=$_POST['link'];
if(!empty($value) && !empty($location)&& !empty($contact_type)){
$query="SELECT * FROM contacts WHERE contact_type='$contact_type' AND contact_value='$value'";
if($query_run=mysql_query($query)){
						//is the query executed
		 if(mysql_num_rows($query_run)==0){
                     $insert="INSERT INTO contacts VALUES ('','".mysql_real_escape_string($contact_type)."','".mysql_real_escape_string($value)."','".mysql_real_escape_string($location)."','".mysql_real_escape_string($link)."')";
	if($sql_run=mysql_query($insert)){
  
  echo "Added Contact<br/>";
	}
        else{
	die(' cant add contact: ' . mysql_error());
	}
                 }
                 else{ 
                     echo $value."  Already Exist<br/>";



}
                 
       }




}
else{ echo "Fill all inputs<br/>";}

}
else
{
        echo 'Not Set';
        
        }
    
}
function getuserfield($field){

	$query="SELECT $field FROM administrator WHERE user_id='".$_SESSION['user_id']."'";
	if($query_run=mysql_query($query)){
			/*the below if*/
			if(mysql_num_rows($query_run)!=0){
				/*getting value*/
				if($num=mysql_result($query_run,0,$field)){
					return $num;
			}
			
			}
	
	} 
}function addmessage(){
    
      
			 	
if(isset($_POST['name'])&& isset($_POST['subject'])&& isset($_POST['email'])&& isset($_POST['message']))
{


$name =  trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);
$subject=trim($_POST['subject']);
$date=date("Y/m/d g:i:s a");
if(!empty($name) && !empty($subject)&& !empty($message)&&!empty($email)){
$query="SELECT  sender_name='$name',subject='$subject' FROM messages WHERE  message='$message'";
if($query_run=mysql_query($query)){
						//is the query executed
		 if(mysql_num_rows($query_run)==0){
                     $insert="INSERT INTO messages VALUES ('','".mysql_real_escape_string($name)."','".mysql_real_escape_string($email)."','".mysql_real_escape_string('invalid')."','".mysql_real_escape_string($subject)."','".mysql_real_escape_string($message)."','".mysql_real_escape_string($date)."')";
	if($sql_run=mysql_query($insert)){
  
  echo "Thank you for Your time<br/>";
  $subjects='Appreciation';
  $emails='Hello '.$name.' We thank you for Supporting our Services';
  $header='';
  $retval = mail($email,$subjects,$emails,$header);
  if( $retval == true )
   {
      echo '<b style="color :blue;">Email sent successfully...</b><br/>';
   }
   else
   {
      echo '<b style="color :red;">Email could not be sent...</b><br/>';
   }
  }

        else{
	die(' Sorry we did not get your Message: ' . mysql_error()).'<br/>';
	}
}
    else{ 
    echo '<b style="color:red;">'.$name.'</b><br/> <b style="color:blue;"> You have Already Submited  this: </b><br/><b style="color:red;">&Rrightarrow; '.$message.'</b><br/>';
           
}
                 

     

}

}

else{
    echo "Fill all inputs<br/>";

}
 
}
}
function deletemsg(){
$delqry="delete from messages where msgid='".$id."'";
if ($query_run= mysql_query($delqry)){
echo 'Deleted';
}
}
		
		function messages(){
		  $query="SELECT * FROM messages ORDER BY date DESC";
			if($query_run= mysql_query($query)){
								
								if(mysql_num_rows($query_run)>0){
							
									$id=mysql_result($query_run,0,'msgid');
									$name=mysql_result($query_run,0,'sender_name');
									$email=mysql_result($query_run,0,'sender_email');
																$valid=mysql_result($query_run,0,'validmail');
																$subject=mysql_result($query_run,0,'subject');
																$message=mysql_result($query_run,0,'message');
									$date=mysql_result($query_run,0,'date');
									
									//$idz=$_POST[$id];
									//int counter=3;
									$result = mysql_query( $query );
										//deletemessage();
									//echo $id;//getting user id and echoling it in a browser
																echo '<div align="center">';
																echo '<h3>Messages from customers</h3>';
																echo '<div align="right">';
																		$ids=$_GET['id'];
																		if(isset($ids)){
																		$delqry="delete from messages where msgid='".$ids."'";
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
															<span class="author_name">From: <b><a rel="author" title="Posts by '. $result_row[1] . '" href="mailto:'.$result_row[2].'">'. $result_row[1] . '</a></b></span>
															<span class="category">About <a rel="category tag" title="View all posts in '. $result_row[4] . '" href="#">'. $result_row[4] . '</a></span>
															<b> On: </b><span class="date"><a>'. $result_row[6] . '</a></span>
															<span class="comments"><a href="blogpost.php#messages"> message '.$xx.'</a></span>
															
														</div>
														<div class="messageblock ">
														<p><b style="color:red;"> &Rrightarrow;</b>'. $result_row[5] .'.</p>
															<div style="float:right"><b><a href="?id='.$result_row[0].'" onclick="return confirm(\'Do you really want to delete this? Press Yes to continue.\')">Delete</a></b></div><br/>
													</div>  ';
																	
																	
																	
																	
																	
																	
																	
															 
						}
			
				}
								else{
								echo '<div style="color:red; width:90%">No Messages Found</div> ';
								}
							}
							
					  
			
		}
?>
