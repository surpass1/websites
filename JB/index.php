<?php include 'header.php';?>

  <div class="mainTitle">
  <div class="container">
  <h1>JB International</h1>
  <p>

  </p>
  </div>
  </div>
 
    <!-- Marketing messaging and featurettes    <!-- Indicators -->

    <div class="container marketing" style="background-color:#fff;">
   <div id="myCarousel4" class="carousel slide" data-ride="carousel">
    
      <div class="carousel-inner">
      <div class="item active">
      <div class="row featurette">
        <div class="col-md-8">
          <h2 class="featurette-heading">Fresh and Dry <span class="text-muted">Mushrooms</span></h2>
          <p class="lead">We promote quality fresh and dry mushrooms which will promote nutritional and therapetic values at house hold levels.
</p>
        </div>
        <div class="col-md-4 pull-right">
          <img src="themes/assets/images/mushroom.jpg" alt="Mushrooms" width="350"  class="img-rounded">  
        </div>
      </div>
      </div>

      
  <div class="item">
      <div class="row featurette">
        
        <div class="col-md-8">
          <h2 class="featurette-heading">Skills needed by <span class="text-muted">farmers.</span></h2>
          <p class="lead">We organize and equip farmers with skills to make them succesful mushroom entrepreneurs and to be able to diversify their sources of income
        </p>
        </div>
        <div class="col-md-4">
          <img src="themes/assets/images/Entrep.png" alt="Mushrooms" width="350" height="270"  class="img-rounded">
        </div>
      </div>
      </div>


  <div class="item">
      <div class="row featurette">
        <div class="col-md-8">
          <h2 class="featurette-heading">Family <span class="text-muted">Empowerment  </span></h2>
          <p class="lead">We empower family members with life skills that will enable them fit in the societies they live in as productive,constructive, active and responsible people.
        </p>
        </div>
        <div class="col-md-4">
          <img class="img-rounded" src="img/2.JPG" width="350" height="270" alt="Generic placeholder image">
        </div>
      </div>
      </div>
     </div>
    </div><!-- /.carousel -->   
  <!-- /.container -->
  <div class="introSection">
    <div class="row">
        <div class="col-lg-3" style="height:10px;">
          <font size="+1" class="text-info" style="text-decoration:overline;">Check out our options below
          </font><img src="gallery/arrow.jpg" class="img-circle" width="50" />
      </div>
      <div class="col-lg-1">
        
      </div>
      <div class="col-lg-6">
        <font size="+2">
            GOD'S GLORY FAMILY FELLOWSHIP(GGFF)
        </font>
      </div>
      <div class="col-lg-2">
        <!-- /.modal starts here -->
        <button type="button" class="btn  btn-mini btn-info pull-right" data-toggle="modal"
                       data-target="#mdl_example">Click here to check GGFF out >>></button>
              <div class="modal fade" id="mdl_example">
                <div class="modal-dialog" role="modal">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal"
                              aria-hidden="true"></button>
                      <h4 class="modal-title">GOD'S glory family fellowship </h4>
                    </div>
                    <div class="modal-body well">
                      <p>
                          
                        <?php
                         require 'JB/connect.php';
                            $result = mysql_query("SELECT DISTINCT * FROM fellowship ORDER BY id DESC LIMIT 5");
                            while($row = mysql_fetch_array($result))
                            {
                        ?>
                                    
                        <p>
                          <?php echo $row['content'];
                
                                echo '<hr class="">';
                              
                          }?>
                        </p>
                      </p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">
                        Close
                      </button>
                      <button type="button" class="btn btn-success">
                        Go for more...
                      </button>
                    </div>
                  </div>
            </div>
          </div>

          <!--Modal ends here-->
      </div>
    </div>
  </div>


  <div class="">
    <div class="row">
      <div class="container">
        <div class="col-lg-3 btn-info">
            ﻿<ul class="nav nav-tabs nav-stacked btn-block pull-left">
                <li class="active"><a href="#home" data-toggle="tab">From the Director</a></li>
                <li><a href="#facebook" data-toggle="tab">Facebook timeline</a></li>
                <li><a href="#inbox" data-toggle="tab">Upcoming events</a></li>
                <li><a href="#send" data-toggle="tab">News &amp; Updates</a></li>
            </ul>
        </div>
        <div class="col-lg-6">
            <div class="tab-content">
                    <div class="tab-pane active" id="home">
                      <div class="panel panel">
                          <div class="media">
                                <a class="pull-left" href="#">
                                     <img src="themes/assets/images/md.jpg" alt="Mushrooms" width="150">
                                </a>
                                <div class="media-body">
                                <h4 class="media-heading lead">From the Director</h4>
                                <div class="media">
                                  Welcome to JB international Training and resource center. I believe and
                                  trust that positive thinking leads to thinking different and thus making things happen.
                                  
                                  <hr/>
                                  our role is to mobilize and train communities according to their needs 
          after carrying out needs assessment... <span class="text-primary">Read more</span>
                                </div>
                            </div>
                            </div>
                                         
                            </p>
                        </div>
                        
                    </div>

                    <div class="tab-pane" id="facebook">
                      <div class="panel panel">
                        <div class="panel-heading panel-info"><h5><b>Our Facebook Timeline</b></h5></div>
                            <div class="panel-body" style="height:200px;">
                              Coming soon
                              
                            </div>
                        </div>
                        
                    </div>
                    <div class="tab-pane" id="inbox">
                      <div class="panel panel">
                        <div class="panel-heading panel-info"><h5><b>Events you should not miss</b></h5></div>
                          <div class="panel-body" style="height:200px;">
                              Coming soon 
                          </div>
                        </div>
                    
                    </div>
                    <div class="tab-pane" id="send">
                      <div class="panel panel">
                          <div class="panel-heading panel-info"><h5><b>News and updates from us</b></h5></div>
                            <div class="panel-body container" style="height:200px;">
                                 Coming soon
                            </div>
                        </div>
                    </div>
                </div>
          </div>
        
      
          <div class="col-lg-3 pull-right">
            <p>
             <button class="badge btn-danger btn-lg">Inspirational quotes</button>
            </p>
            <p>Try not to become a man of success but a man of value.</p>
            <p>Love always seeks for betterment, for ways of making life more workable, joyful, hold, and beautiful.</p>
            <p>We are what we repeatedly do. Excellence, therefore, is not an act but a habit.</p>
          </div>
      
     </div>
      
    </div>
  </div>
</div>  <!-- /END THE FEATURETTES -->
  
    <!-- Wrap the rest of the page in another container to center all the content. -->
  
  
  </div>

<?php include 'footer.php';?>


    