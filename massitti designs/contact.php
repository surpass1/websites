		<?php
			
			require 'connect.php';
			require 'functions.php';
		?>
		<?php require 'header.php';?>
        

        <!-- End Main Nav -->


        <!-- Start Wrap--->

	    <div class="container paul"> 
        <div id="wrap" style="margin-left:15px;">
            <div class="main" id="main-no-space">  
                <div id="main-page">
                    <div id="wrapper" class="container">
                        <div id="page-title">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="row">
                            <div class="span4">
                                <p>Send us a message so that we may connect with you</p>
                                <div id="contact-form">
                                    <form action="" method="post"  class="form-actions">
                                        <fieldset>
                                            
                                            <div><input class="input-large span3" name="name" type="text" placeholder="Name"></div>
                                            <div><input class="input-large span3" name="subject" type="text" placeholder="Subject"></div>
                                            <div><input class="input-large span3" name="email" type="text" placeholder="Email"></div>
                                            
                                            <textarea rows="6" name="message" class="input-slarge span3"></textarea>
                                        </fieldset>
                                        <?php
											contact();
										?>
                                        <button type="submit" class="btn btn-majoo" style="margin-left:135px;" name="send">Send a Message!</button>
                                    </form>
                                </div>
                            </div>
                            <div class="span3">
                            		<div class="headline no-margin form-actions">
                                	<h4>Our Contact information</h4>
                                	<p class="well-small">
                                    	<b class="text-warning">Email:</b><a href="mailto:sndrashid@yahoo.co.uk">sndrashid@yahoo.co.uk</a><br/>
                                        <b class="text-warning">Website:</b><a href="www.massittidesigns.com">massittidesigns.com</a><br/>
                                        <h5 class="text-warning">Telephone Contacts</h5>
                                        <i></i>+256718518352<br/>
                                        +256755161636<br/>
                                        +256700861775<br/>
                                    
                                    </p>
                                   
                                   </div> 
                             </div>
                            <div class="span3">
                                <div class="headline no-margin">
                                	<h4>Our Location	</h4>
                                	 
                                </div>
                                
                            </div>
                            
                    </div>
                </div>
            </div>  
        </div>
		</div>
        <!-- End Wrap -->

        <!-- Start Footer -->
		<?php require 'footer.php'?>