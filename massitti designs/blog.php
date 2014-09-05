<?php require 'header.php'; ?>
 
<br/>
<br/>
<br/>
<br/>	
<div class="row container paul">
	<div class="span4">
    	<form class="form-actions" method="post" action="">
            <h3 class="form-signin-heading">Post your comment</h3>
            <input type="text" class="span3 btn-medium" placeholder="Name" name="sender" autofocus>
            <input type="text" class="span3 sbtn-medium" placeholder="Location" name="location">
            <textarea rows="4" name="message"   class="span3 btn-medium" placeholder="Type comment"></textarea>
            <br/>
            <input style="margin-left:10px;" type="reset" class="btn btn-medium btn-inverse pull-left" placeholder="Password">
            <button class="btn btn-medium btn-majoo span2" type="submit" name="submit">Post</button>
      </form>
		 <?php 
	
			require('connect.php');
			require ('functions.php');
			blog();
			
		?>
    </div>
    <br/>
    <div class="span6">
          <div class="headline marginbottom"><font size="+3" face="Trebuchet MS, Arial, Helvetica, sans-serif">The Massitti Blog, whats your say	!</font></div>
               
               		  <div class="entry" align="left">
					 <?php
                     	$result = mysql_query("SELECT DISTINCT * FROM blog ORDER BY id DESC LIMIT 10");
                        while($row = mysql_fetch_array($result))
                        {
                     ?>
                     
                       		
                        	<span class="btn-block meta"><p align="left" style="margin-left:15px;">
                            	 <strong>
								<?php echo 'Posted by <b class="text-warning">'.$row['sender']. '</b>
								<b class="muted" style="margin-left:40px;"> from '.$row['location']. '</b> <b class="muted pull-right"> On '. $row['date'].'</b>';?>
                                </strong>
                               
								
                                <small>
								</small>
                                <small>
								</small>
                                 
									 <?php echo '<p style="margin-left:15px;" align="left">'.$row['message']. '</p>';?>  
                                	 <hr/>
                               		 <?php 
									  	}
									  mysql_close($con);
									  
								?>
                             </span></p>
                            <div>
                                   
                                </div>
                            </div>
                            
                        </div>
                    </div>