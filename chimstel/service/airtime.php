	<?php
		require ('header.php');
	?>
    <div class="">
    	<div class="container content_wrapper blog_info_block">
        	  
         <div class="row-fluid" style="background-color:#FFF"><!--start of row fluid-->
            <div class="span3">
            <br />
            <h4 class="well-small badge-warning">Categories of Products</h4>
              <ul class="nav nav-list bs-docs-sidenav affix-top feedback_go" style="padding-left:10px;">
                <li><a href="#phone">Phones</a></li>
                <li><a href="#modem">Modems</a></li>
                <li><a href="#router">Routers</a></li>
                <li><a href="#charger">Chargers</a></li>
                <li><a href="#memo">Memory Cards</a></li>
              </ul><br/>

            <h4 class="blog_info_block"s >Products on promotion</h4>
            <?php
			 echo '<div class="color9">';
			 promotion();
			 echo '</div>'
		     
			?>
            
            
   		</div>
          <div class="span6"><br />
            <h5 class="well-small">Original Mobile Phones
                <form class="pull-right" name="search" method="post" action="">			
                        <div class="input-append well">
  							<input name="s" class="span8" placeholder="Search product..." id="appendedInputButton" type="text">
						    <button class="btn" type="submits">Search!</button>
						</div>
              </form>
           </h5>
           	<br />
            <?php
				echo '<div class="">';
				 
				 phoneproducts();
				 
				echo '</div>'
			?>
            <a name="phone"></a>
           
            </div>
            <div class="span3">
            
             <br />
             	<h5 align="center" class="well-small" >On the Advert Chart we bring you!</h5>
       		
			<?php
			  echo '<div class="">';
			  advert();
			  echo '</div>';
			?>
             
         
         <div class="row-fluid" style="background-color:#FFF">
             <a name="memo"></a> 
             <div class="span1">
             </div>
             <div class="span7">
            
             	<?php
                  echo '<div class="">';
                  accessories();
                  echo '</div>';
                ?>
                <a name="modem"></a>
             </div>
             <div class="span3">
             <h5 align="center" class="blog_info_block" >Other Products</h5>
                <?php
                  echo '<div class="">';
                  otherproducts();
                  echo '</div>';
                ?>
                <a name="charger"></a>
            </div>
         </div>
          
    </div>
    </div>
    </div>
    </div>  
    </div>  
    
    <footer>
    	<div class="modal-footer">
           
            <div class="copyright">© 2013 TopBrainz. All Rights Reserved.</div>
            
            
                <div class="clear"></div>                
            </div>
        </div>
	</footer>
	
</body></html>