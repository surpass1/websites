<?php 

		function subscribe(){
			if(isset($_POST['email']))
			{
				
				$subscribemail=trim($_POST['subscribemail']);
				$subdate=date("Y/m/d g:i:s a");
				if(!$subscribemail)
				{
					echo '<P class="text-error pull-left offset1 text-warning" style="text-decoration:blink">Fill in please</p>';
				}
				else{
					
				$quey="SELECT  subscribemail='$subscribemail' FROM subscribe WHERE  subscribemail='$subscribemail'";
				if($quey_run=mysql_query($quey)){
					if(mysql_num_rows($quey_run)==0){
						$qruey = mysql_query("INSERT INTO subscribe(subscribemail, date)VALUES('$subscribemail', '$subdate')");
						if($qruey)
						{
							echo '<p class="btn-majoo text-warning" align="center">Successfully subscribed</p>';					
						}
						else 
						{ 
							'<p class="btn-majoo text-warning" align="center">You have not subscribed, try again</p>'; 
						}
					}
					else{ echo 'Try again';}
				}
				
				else{ echo 'Email Exists';}
				
			}
				}
		
		}
		
		function blog(){
			if(isset($_POST['submit']))
			{
				$message=trim($_POST['message']);
				$sender=trim($_POST['sender']);
				$location=trim($_POST['location']);
				$date=date("Y/m/d g:i:s a");
				if(!$message || !$sender || !$location){
					echo '<P class="text-error pull-left offset1" style="text-decoration:blink">Fill in the all the fields</p>';
				}
				else{
					
				$query="SELECT  sender='$sender',location='$location' FROM blog WHERE  message='$message'";
				if($qry_run=mysql_query($query)){
					if(mysql_num_rows($qry_run)==0){
						$qry = mysql_query("INSERT INTO blog(message, sender, location, date)VALUES('$message', '$sender', '$location', '$date')");
						if($qry){
						echo '<p class="btn-majoo" align="center">Post successfully submitted</p>';					
						}
						else { '<p class="btn-majoo" align="center">Post not submitted, try again</p>'; }
					}
					else{ echo 'Try again';}
				}
				
				else{ echo 'Comment already submitted';}
				
			}
				}
		
		}
		
		function search(){
			//Latest products 
			if(isset($_POST['s'])) {
					
					$search = $_POST['search'];
					
					if(!empty($search)){
						echo '<h3 class="text-warning" style="margin-left:200px;"> Result(s) for '.$search.':</h5>';
						$squery="SELECT * FROM photos WHERE name LIKE '%".$search."%'";
							   // $squerya="SELECT * FROM products WHERE productdescription LIKE '%".$search."%'";
						if($query_run=mysql_query($squery)){
							if(mysql_num_rows($query_run)>0)
							{
								
											$id=mysql_result($query_run,0,'id');
											$name=mysql_result($query_run,0,'name');
											$desc=mysql_result($query_run,0,'caption');
											//$imgp=mysql_result($query_run,0,'imagepapth');
																	   
											
											$relts = mysql_query( $squery);
																		//$result = mysql_query( $squerya);
											
											while ($res_row = mysql_fetch_row($relts))
											{
													
												   echo '<div class="span3">
															<div class="picture">
																<img src="'.$res_row[2].'"/>
																<div style="opacity: 0; display: block;" class="image-overlay-zoom"></div></a></div>
															<div class="item-description">
																<h5>'.$res_row[1].'</h5>
																<p>'.$res_row[3].'</p>
															</div>
														  </div>';
												   
												  
												// echo '</p>';
											}
							}
							else
							{
									echo '<h4 style="margin-left:200px;" style="color:RED">'.$search.' Not Found, check your search.</h4>';
							}
						}
		
		
					}
				}
			}
		



		//Function for contacts
		//Function for contacts
		function contact(){
    	
				if(isset($_POST['name'])&& isset($_POST['subject'])&& isset($_POST['email'])&& isset($_POST['message']))
				
				{
				
						
						$name =  trim($_POST['name']);
						$email = trim($_POST['email']);
						$message = trim($_POST['message']);
						$subject=trim($_POST['subject']);
						$date=date("Y/m/d g:i:s a");
						
						if(!empty($name) && !empty($subject)&& !empty($message)&&!empty($email)){
						$query="SELECT  sender_name='$name',subject='$subject' FROM contact WHERE  message='$message'";
						
						if($query_run=mysql_query($query)){
												//is the query executed
							if(mysql_num_rows($query_run)==0)
							{
								$insert="INSERT INTO contact VALUES ('','".mysql_real_escape_string($name)."','".mysql_real_escape_string($email)."','".mysql_real_escape_string('invalid')."','".mysql_real_escape_string($subject)."','".mysql_real_escape_string($message)."','".mysql_real_escape_string($date)."')";
								if(mysql_query($insert)){
									  echo '<b class="text-success">Thank you, message sent.<br/>';
								}
						
								else{
									die(' Sorry we did not get your Message: ' . mysql_error()).'<br/>';
								}
								
								
								}
							
							else{ 
								echo '<b style="color:red;">'.$name.'</b><br/> <b style="color:blue;"> Message exists in the sent, thank you: </b><br/><b style="color:red;">&Rrightarrow; '.$message.'</b><br/>';
							}
							}
						
						}
						
					else{
							echo '<b class="text-warning">Fill all inputs</b>';
						
					}
						 
					}
					}
			
			function all(){
    			//Latest products 
     
  				$dbsquery="SELECT * FROM photos ORDER BY name DESC LIMIT 21";
   				if($query_run= mysql_query($dbsquery)){
						
						if(mysql_num_rows($query_run)>0){
                                $id=mysql_result($query_run,0,'id');
								$name=mysql_result($query_run,0,'name');
								$img=mysql_result($query_run,0,'imagepath');
								$caption=mysql_result($query_run,0,'caption');
								
								$results = mysql_query($dbsquery);
	
								//echo $id;//getting user id and echoling it in a browser
								while ($result_row = mysql_fetch_row($results))
								{
										
                                       echo '<div class="span3">
                                				<div class="picture">
                                    				<img src="'.$result_row[2].'"/>
                                        			<div style="opacity: 0; display: block;" class="image-overlay-zoom"></div></a></div>
                                				<div class="item-description">
                                    				<h5>'.$result_row[1].'</h5>
                                    				<p>'.$result_row[3].'</p>
                                				</div>
                            				  </div>';
									   
									  
									// echo '</p>';
                                }
					 }
					else{
						echo '<div style="color:grey;">More Designs to come</div>';
						}
							
				}
                else
				{
					echo '<div style="color:grey;">Null</div>';
				}
	
    
    
		}
				
		
			function wallart(){
    			//Latest products 
     
  				$dbsquery="SELECT * FROM photos WHERE name='Sculpture' ORDER BY name DESC";
   				if($query_run= mysql_query($dbsquery)){
						
						if(mysql_num_rows($query_run)>0){
                                $id=mysql_result($query_run,0,'id');
								$name=mysql_result($query_run,0,'name');
								$img=mysql_result($query_run,0,'imagepath');
								$caption=mysql_result($query_run,0,'caption');
								
								$results = mysql_query($dbsquery);
	
								//echo $id;//getting user id and echoling it in a browser
								while ($result_row = mysql_fetch_row($results))
								{
										
                                       echo '<div class="span3">
                                				<div class="picture">
                                    				<img src="'.$result_row[2].'"/>
                                        			<div style="opacity: 0; display: block;" class="image-overlay-zoom"></div></a></div>
                                				<div class="item-description">
                                    				<h5>'.$result_row[1].'</h5>
                                    				<p>'.$result_row[3].'</p>
                                				</div>
                            				  </div>';
									   
									  
									// echo '</p>';
                                }
					 }
					else{
						echo '<div style="color:grey;">More Designs to come</div>';
						}
							
				}
                else
				{
					echo '<div style="color:grey;">Null</div>';
				}
	
    
    
		}
	?>