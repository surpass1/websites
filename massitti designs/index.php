		<?php require 'header.php';?>
        <!-- Start Wrap--->
		   <div id="wrap">
            <div class="main" id="main-no-space">

                <!-- Start Header -->

                <div id="header">
                    <header>
                        <div class="container"> 
                            <div class="flexslider image-slider">
                                <ul class="slides">
                                    <li class="" style="width: 100%; float: left; margin-right: -100%; position: relative; display: none;">
                                        <div class="row">
                                            <div class="span6" id="main-text" >
                                                <br>
                                                <br>
                                                <h1 style="margin-left:20px">BEAUTIFUL LOOK   </h1>
                                                <h3 style="margin-left:20px">Change the look of your home, look at the green compound with pavers with a fantastic design. All done by massitti designs.</h3>
                                                <p style="margin-left:20px">If you have been thinking of how you can make your home have a smarter and attractive look</p>
                                                <div class="btn-group pull-right" style="margin-left:20px">
                                                    
                                                    <a class="btn-mini" href="gallery.php">View Gallery</a>
                                                </div>
                                            </div>
                                            <div class="span6"><img src="images/IMG_20131002_165036 - Copy (2).jpg" class="img-circle" alt="image" class="img-circle"></div>
                                        </div>     </li>
                                    <li class="" style="width: 100%; float: left; margin-right: -100%; position: relative; display: none;">
                                        <div class="row">
                                            <div class="span6" id="main-text">
                                                <br>
                                                <br>
                                                <h1 style="margin-left:20px">ART AND BEYOND</h1>
                                                <h3 style="margin-left:20px">Sculpture that is beyond normal art, a water fall into an artificial water body, sorrounded by flowers</h3>
                                                <p style="margin-left:20px">We specialize in great service, exceptional design and engaging interactive experiences for art and even more. Change the look and the environment with massitti designs..</p>

                                                <div class="btn-group pull-right" style="margin-bottom:20px;">
                                                    
                                                    <a class="btn-mini" href="Designs.php">Check products</a>
                                                </div>
                                            </div>
                                            <div class="span6 "><img src="images/IMG_20131002_170850_1.jpg" class="img-circle"s	 alt="image"></div> 
                                        </div>
                                    </li>
                                    <li class="flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; display: list-item;">
                                        <div class="row">
                                            <div class="span6" id="main-text">
                                                <br>
                                                <br>
                                                <h1 style="margin-left:20px">MAJESTIC DESIGN</h1>
                                                <h3 style="margin-left:20px">With our great, we deliever the best, long lasting, nice and attractive design that are not common else where.</h3>
                                                 <p style="margin-left:20px">Our work is done with the experienced staff, hundreds of our art and other work has not failed, not even one. Create with us an environment you will never regret staying in.</p>
                                                <br>
                                                <div class="btn-group pull-right" style="margin-bottom:20px;">
                                                   <a class="btn-mini" href="Designs.php">Contact us for more...</a> 
                                                </div>
                                            </div>  
                                            <div class="span6 "><img src="images/IMG_20131002_164858 - Copy (2).jpg" class="img-circle" alt="image"></div>
                                        </div>
                                    </li>
                                </ul>
                            <ul class="flex-direction-nav">
                            	<li><a class="flex-prev" href="#">Previous</a></li>
                           	 	<li><a class="flex-next" href="#">Next</a></li></ul></div>
                    </div></header>
                </div>   

                <!-- End Header -->      

                <!-- End Header -->

            </div>
            <!--this week's image goes here-->
            
            		<?php 
						require('connect.php');
						require ('functions.php');
						require 'thisweek.php';
					?>

                    <hr>                
                    
                            <div class="headline marginbottom" style="margin-left:5px;"><h4>Recent Work</h4></div>
                            <div class="row" style="margin-left:10px;">
                                <!-- Project -->
                                <div class="span2">
                                    <div class="picture"><a rel="image" class="hoverZoomLink"><img src="images/IMG_20131213_120341.jpg" alt=""><div class="image-overlay-link" style="opacity: 0; display: block;"></div></a></div>
                                    <div class="item-description">
                                        <h5><a href="#">Compound</a></h5>
                                        <p>Compound design that changaed the look of the compound you see</p>
                                    </div>
                                </div>
                                <div class="span2">
                                    <div class="picture"><a rel="image" class="hoverZoomLink"><img src="images/IMG_20131002_170821_1.jpg" alt=""><div class="image-overlay-zoom" style="opacity: 0; display: block;"></div></a></div>
                                    <div class="item-description">
                                        <h5><a href="#">The Rocks</a></h5>
                                        <p>The rocks with a fountain flowing in the artificial water body</p>
                                    </div>
                                </div>
                                <div class="span2">
                                    <div class="picture"><a rel="image" class="hoverZoomLink"><img src="images/IMG_20131002_170850_1.jpg" alt=""><div class="image-overlay-link" style="opacity: 0; display: block;"></div></a></div>
                                    <div class="item-description">
                                        <h5><a href="#">Sculpture</a></h5>
                                        <p>Amazing crocodile sculpture with a flowing waterfall by the rocks</p>
                                    </div>
                                </div>
                                <div class="span2">
                                    <div class="picture"><a rel="image" class="hoverZoomLink"><img src="images/IMG_20131002_170713_1.jpg" alt=""><div class="image-overlay-link" style="opacity: 0; display: block;"></div></a></div>
                                    <div class="item-description">
                                        <h5><a href="#">Gate Design</a></h5>
                                        <p>Strong rock Gate design like that of the kings palace</p>
                                    </div>
                                </div>
                                
                                <div class="span2">
                                    <div class="picture"><a rel="image" class="hoverZoomLink"><img src="images/IMG_20131005_094701.jpg" alt="">
                                    <div class="image-overlay-link" style="opacity: 0; display: block;"></div></a></div>
                                    <div class="item-description">
                                        <h5><a href="#">Building materials</a></h5>
                                        <p>Genuine long lasting building materials.</p>
                                    </div>
                                </div>
                                
                                
                            </div>
                            	
                        </div>
                        <div class="row">
                        	
                            <div class="span12">
                            	<div class="alert">
                            	<button data-dismiss="alert" class="close" type="button">×</button>
                            
                                    <h4><strong>Post your comments on our blog,</strong> keep in touch with us...<a href="" class="btn-mini btn-majoo pull-right">Blog</a></h4>
                                </div>
                            	</div>
                            	<div id="colorSelector"><div style="background-color: rgb(91, 91, 140);"></div></div>
                        		</div>
                             
                            <div class="span8">
                            
                            	 <div class="headline marginbottom"><font size="+1" face="Trebuchet MS, Arial, Helvetica, sans-serif">Comments from different people</font></div>
               
                             <div class="entry" align="left">
                             <?php
							    $result = mysql_query("SELECT DISTINCT * FROM blog ORDER BY id DESC LIMIT 3");
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
										     ?>
                                     </span></p>
                                    <div>
                 
                            </div>
                        </div>
                </div>
            </div>
        </div> 

        <!-- End Wrap -->
        
        <!-- Start Footer -->

        <div id="footer">
            <div class="container">
                <div class="links">
                    <ul class="unstyled">
                        <li><a href="#">Copy right TopBrainz</a></li>
                       
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- End Footer -->
		
         <!-- Javascripts  ================================================== -->

        <div class="fit-vids-style">­<style>               .fluid-width-video-wrapper {                 width: 100%;                              position: relative;                       padding: 0;                            }                                                                                   .fluid-width-video-wrapper iframe,        .fluid-width-video-wrapper object,        .fluid-width-video-wrapper embed {           position: absolute;                       top: 0;                                   left: 0;                                  width: 100%;                              height: 100%;                          }                                       </style></div>
		<script src="maJoo_files/analytics.js" async></script>
		<script src="massitti/jquery_002.js"></script>
        <script src="massitti/bootstrap.js"></script>
        <script src="massitti/bootstrap-tab.js"></script>
        <script src="massitti/bootstrap-transition.js"></script>
        <script src="massitti/fancybox.js"></script>
        <script src="massitti/custom.js"></script>
        <script src="massitti/jquery.js"></script>
        <script src="massitti/sliderjs.js"></script>
        <script src="massitti/switcher.js"></script>
        <script src="massitti/flexslider.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.image-slider').flexslider({
                    animation: "fade",
                    slideshowSpeed: 4000,
                    animationDuration: 1000,
                    controlNav: false,
                    keyboardNav: true,
                    directionNav: true,
                    pauseOnHover: true,
                    pauseOnAction: true    
                });

    	
            });
        </script>
        <script>
            //  Slider
   $(document).ready(function(){
        $('#slides').slides({
            effect: 'fade',
            play: 2000,
            pause: 2500,
            autoWidth: true,
            hoverPause: true,
            paginationClass: 'paging',
            start: 1
          
        });
    });

//Slider End
</script>
        <script>
            $(".feature-tab").click(function(){
                show_feature($(this).attr("id"),this)
                return false;
            });

            var show_feature = function(feature,from){
                $(".feature-tab").removeClass("current");
                $("#" + feature).addClass("current");
                $(".slide-content").hide();
                if(from != 'link'){
                    $("#" + feature + "-content").removeClass("hide");
                }else{
                    $("#" + feature + "-content").fadeIn('slow');
                }
            }
        </script>

        
		    
</body></html>