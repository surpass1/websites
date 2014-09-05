
    
    	<?php
        	include "header.php";
		?>
        <div style="height:2px;"></div>
		<!-- Contact Us -->
        <div class="row">
            <div class="span8">  
            	<h3>Contact Us</h3>
                <p>A way to get in Touch with us</p>
                <form method="post">                         
                    <input type="text" class="input-block-level placeholder" placeholder="Name" name="name"></input><br/>
                    <input type="text" class="input-block-level placeholder" placeholder="Email" name="email"></input><br/>
                    <textarea rows="5" class="input-block-level placeholder" placeholder="Message" name="message"></textarea>                    
                    <input type="submit" value="Send Message" class="btn btn-block btn-primary" name="send_message"></input>
                </form>
                
               
                
            </div>
            <div class="span4">
                <font size="+3"><h5>OUR CONTACT INFORMATION</h5></font>
                <p>Location</p>
                <p>Our office is located in Kampala,
    Opposite Watoto Central 
    Hotel Equatorial complex,
    The Executive Suite level 3</p>
                <p>Office Number: +256790914950</p>
                <p>info@topbrainzafrica.com</p>
                <img src="Images/map.png"/>                            
            </div>                        
        </div>
    	<?php require 'footer.php';?>