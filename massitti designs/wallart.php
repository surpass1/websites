
<?php require 'header.php';?>

	<div id="wrap">
            <div class="main" id="main-no-space">  
                <div id="main-page">
                    <div id="wrapper" class="container">
                       
                        
                        
                        <div class="row">
                            <div class="span3">
                            	<?php require 'sidebar.php';?>
                            </div>
                            <div class="span9">
                              	<p id="page-title">
                            		<h2 style="margin-left:15px;">Massitti Designs</h2>
                       		  	</p>
                            	<div class="row">
                            		<?php 
	
										require('connect.php');
										require ('functions.php');
										wallart();
										
									?>
                           	    </div>
                            
                           </div>
                        
                       
                          </div>  
                        </div>
                       </div>
<?php require 'footer.php';?>