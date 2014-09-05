<?php

require 'functions.php';
require 'connect.php';
?>
<?php require 'head.php';?>
	
           <nav>
                <ul class="menu sf-js-enabled sf-shadow">
                	
                    <li class="brand pull-left">
              
                        <span class="menu_marker"></span></li>
                    
                	
                    <li class="has-menu level1"><a href="index.php">Home</a>
                        <span class="menu_marker"></span></li>
                    <li class="has-menu level1"><a href="aboutus.php">About</a><span class="menu_marker"></span></li>
                    <li class=" has-menu level1"><a href="services.php">Services</a>
                        <span class="menu_marker"></span></li>
                    <li class="has-menu level1"><a href="products.php">Products</a>
                      <span class="menu_marker"></span></li>
                    <li class="has-menu level1"><a href="blog.php">Blog</a>
                      <span class="menu_marker"></span></li>
                    <li class="current-menu-parent has-menu level1"><a href="contact.php">Contacts</a>
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
     <div class="container content_wrapper blog_info_block">
    	        
                                <div class="row-fluid">
                                    <div class="span12 well-small" style="margin-left:15px">
                                        <h3 align="left">Contact Us.</h3>
                                        <p align="left">At Chimstel we have various branches around the country,you can also contact us using the contacts 
                                            shown on the contacts page. You can also write us an email using the form below. Our head office is at Block 18, Plot 764 Batuma House, Nalukolongo – Nateete, Masaka Road </p>
                                    </div><!-- .module_cont -->
								</div><!-- .row-fluid -->
                                
                                
                                <div class="row-fluid" style="margin-left:1px; background-color:#FFF">
                                	<div class="span3 module_cont module_contact_info" align="left">
                                        
                                        <div class="continfo_item"><h4 class="headInModule">Get in Touch with us!</h4></div>
                                         <div class="continfo_item"><b class="text-error">Location/Address:<br/></b>Block 18, Plot 764 Batuma House,<br/>  Nalukolongo – Nateete, Masaka Road.<br/> 
P. O. Box 5050 Kampala – Uganda, </div>
                                        <div class="continfo_item"><b class="text-error">For quick Service call:</b> - +256-312-106676,<br/>  +256-772-228693 and +256-782128008
</div>
                                        <div class="continfo_item"><b class="text-error">E-Mail:</b><a href="mailto:chims@chimstel.co.ug">chims@chimstel.co.ug</a></div>
                                        <div class="continfo_item"><b class="text-error">Website:</b><a href="http://www.chimstel.co.ug">www.chimstel.co.ug</a></div>
                                        <div class="continfo_item"><b class="text-error">Find us on facebook:</b><a href="http://www.facebook.com/MTNDealer"><img src="a_data/fb-ic.png"></a></div>
                                        
                                       
                                    </div><!-- .module_cont -->
                                    <div class="span5 module_cont module_feedback_form" >
                                        <a name="message"></a>
                                        <h4 class="headInModule">Send Us a mail!</h4>
                                        <?php addmessage();?>
                                        
                                        <form name="message" method="post" action="" class="feedback_form">
                                            <input style="width: 392px;" name="name" placeholder="Name*" title="Name*" class="field-name form_field" type="text">
                                            <input style="width: 392px;" name="email" placeholder="Email*" title="Email*" class="field-email form_field" type="text">
                                            <input style="width: 392px;" name="subject" placeholder="Subject" title="Subject" class="field-subject form_field" type="text">
                                            <textarea style="width: 392px;" name="message" cols="45" rows="5" placeholder="Message*" title="Message*" class="field-message form_field"></textarea>
                                            <input name="reset" id="reset2" value="Clear form" class="feedback_reset" type="reset">
                                            <input name="submit" class="feedback_go" id="submit2" value="Send message" style="margin-left:110px;" type="submit"  onclick="ValidateEmail(document.message.email)"/><div class="ajaxanswer"></div>
                                        </form>
                                    </div><!-- .module_cont -->
                                    <div class="span4 module_cont module_contact_info">
                                    	<h4 class="headInModule">Location of our head offices</h4>
                                    	<p>
                                        	<img src="images/google map.PNG" width="600">
                                        </p>
                                    </div>									
                                    									
								</div><!-- .row-fluid -->
                                
                   
        </div><!-- .container -->
    </div><!-- .content_wrapper -->
    <script language="javascript">
		function ValidateEmail(inputText)  
		{  
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
		if(inputText.value.match(mailformat))  
		{  
		document.message.email.focus();  
		return true;  
		}  
		else  
		{  
		alert("You have entered an invalid email address!");  
		document.message.email.focus();  
		return false;  
		}  
		}  
		
	</script>
    <footer>
    	<div class="modal-footer">
           
            <div class="copyright">© 2013 TopBrainz. All Rights Reserved.</div>
               
            
                <div class="clear"></div>                
            </div>
        </div>
	</footer>
	
</body></html>