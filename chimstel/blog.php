			

		   <?php	require 'head.php';?>
           <nav>
                <ul class="menu sf-js-enabled sf-shadow">
                	
                    <li class="brand pull-left">
              
                        <span class="menu_marker"></span></li>
                    
                	
                    <li class="has-menu level1"><a href="index.php">Home</a>
                        <span class="menu_marker"></span></li>
                    <li class="has-menu level1"><a href="aboutus.php">About</a><span class="menu_marker"></span></li>
                    <li class="has-menu level1"><a href="javascript:void(0)">Products</a>
                    	<ul class="sub-menu"><div class="menu_arrow"></div>
                            <li><a href="phone.php">Phones</a></li>
                            <li><a href="promotion.php">Promotions</a></li>
                            <li><a href="accessories.php">accessories</a></li>
                            <li><a href="otherproducts.php">Others</a></li>
                         </ul>
                       
                      <span class="menu_marker"></span>
                     </li>
                     
                     <li class="has-menu level1"><a href="javascript:void(0)">Services</a>
                        <ul class="sub-menu"><div class="menu_arrow"></div>
                            <li><a href="mobilemoney.php">Mobile money</a></li>
                            <li><a href="airtime.php">Air time</a></li>
                            <li><a href="data.php">Data services</a></li>
                            <li><a href="swapping.php">Sim card Replacement &amp; Swapping</a></li>
                            <li><a href="repair.php">Phone repair</a></li>
                        </ul>
                    <span class="menu_marker"></span></li>
                    <li class="class="current-menu-parent has-menu level1"><a href="blog.php">Blog</a>
                      <span class="menu_marker"></span></li>
                    <li  has-menu level1"><a href="contact.php">Contacts</a>
                    	<span class="menu_marker"></span>
                    </li>
                    <li>&nbsp; &nbsp; &nbsp;</li>
                    <li class="pull-right">
                    	<img src="images/mtn.jpeg" width="60"/>
                    </li>                
                </ul><!-- .menu -->
            </nav>
          </div>
         </header>
          
    <!-- C O N T E N T -->
    <?php 
		session_start();
		require('connect.php');
		if(isset($_POST['submit']))
		{
			$message=trim($_POST['message']);
			$sender=trim($_POST['sender']);
			$location=trim($_POST['location']);
			$date=date("Y/m/d g:i:s a");
			if(!$message || !$sender || !$location){
				echo '<P class="text-error pull-left" style="text-decoration:blink">Fill in the all the fields</p>';
			}
			else{
			require('connect.php');
					mysql_query("INSERT INTO message(message, sender, location, date)VALUES('$message', '$sender', '$location', '$date')");
		
			}
		}
	?>

    				                  
      <div class="container content_wrapper blog_info_block"   style="background-color:#FFF">
            
                		
                		   <div class="left-sidebar-block span3">
                           <br />
                           <h4 align="left">Post your Comments</h4>
                           <p align="left">Your comments mean alot to us, please write your comments on our blog</p>
                           <br /><br /><br /><br />
                        	<h5 align="left">Comments form</h5>
                            <h6></h6>
                            <aside class="sidebar">
                                
                                <form class="feedback_form" method="POST" name="" action="">
                                    <input name="sender" style="width: 240px;" class="field-name form_field" type="text" id="texta"  placeholder="Enter your name"/>
                                    <input name="location" class="field-name form_field" style="width: 240px;" type="text" id="location"  placeholder="Enter your location"/>
       								<textarea name="message" cols="30" rows="5" class="field-message form_field" style="width: 240px;" type="text" id="textb" placeholder="Enter comment"></textarea>
        							<input name="reset" value="Clear" class="feedback_reset" type="reset"/>
                                    <input name="submit" class="feedback_go btn-small" type="submit" value="Post Comment" id="post_button" />
       							</form>
                     </div>

                        <div class="posts-block span8">
                            <div class="contentarea" style="background-color:#FFF;">
                                <div class="row-fluid" align="left">
                                    <div class="span12 module_cont module_text_area" style=" margin-left:10px;">
                                    	<br/>
                                        <h2 class="title">Welcome to our Blog!</h2>
                                        <p class="blog_intro">We welcome you to Chims blog where you can post your suggestions, use it to chat with a friend who is on this blog as well. Comment in case of a good or bad service, write to Chims and we promise you that we shall attend to you as soon as possible. At Chims we value our customers, so our faithful customer this blog is for you to use because you mean so much to us. </p>									
                                    </div>								
                                </div><!-- .row-fluid -->
                                <div class="row-fluid">                                
                                    <div class="span12 module_cont module_blog" align="left" >
                                    	<div class="blogpost_title">                                                
                                                <h4>Featured Posts</h4>
                                         </div><!-- .blogpost_title -->
                                         <div class="blog_post_preview">
                                            
   										<?php
                                            
                                            $result = mysql_query("SELECT DISTINCT * FROM message ORDER BY id DESC LIMIT 10");
                                            
                                            
                                            while($row = mysql_fetch_array($result))
                                              {
                                        ?>

                                            <div class="blog_info">
												
                                                <div class="blog_info_block">
                                                    <span class="author_name">Posted by <a rel="author" title="Chims Telecom is here to serve you." href="#"><?php echo $row['sender'];?></a></span>
                                                    <span class="category">staying in <a rel="category tag" title="Chims Telecom is here to serve you." href="#"><?php echo $row['location'];?></a></span>
                                                    <span class="date">On <a a rel="author" title="Chims Telecom is here to serve you." href="#"><?php echo $row['date'];?></a></span>
                                                </div>
                                            </div><!-- .blog_info -->
                                            <article class="contentarea">
                                                <p  style="margin-left:50px;"><?php echo $row['message'];
									  				}
													 mysql_close($con);
                                    				?>
												</p>
                                            </article>                                                                               
                                        </div><!--.blog_post_preview -->
                                     </div>								
                                </div><!-- .row-fluid -->                                
                            </div><!-- .contentarea -->
                        </div>
                                        
                </div><!-- .fl-container -->
              </div><!-- .container -->
    </div><!-- .content_wrapper -->
    </div></div>
       <script>  
	   $(document).ready(function(){
       var j = jQuery.noConflict();
        j(document).ready(function()
        {
            j(".refresh").everyTime(1000,function(i){
                j.ajax({
                  url: "refresh.php",
                  cache: false,
                  success: function(html){
                    j(".refresh").html(html);
                  }
                })
            })
            
        });
        j(document).ready(function() {
                j('#post_button').click(function() {
                    $text = $('#post_text').val();
                    j.ajax({
                        type: "POST",
                        cache: false,
                        url: "save.php",
                        data: "text="+$text,
                        success: function(data) {
                            alert('data has been stored to database');
                        }
                    });
                });
            });
       j('.refresh').css({color:"green"});
    });
    </script>

   <?php require ('footer.php');