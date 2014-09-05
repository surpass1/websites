<?php require 'header.php'; ?>
 
<div class="pageTitle">
    <div class="container">
        <h2 class="lead" style="margin-left:150px;">JB comment blog</h2>
    </div>
</div>
<div class="row" style="margin-top:50px;">
  <div class="container">
  <div class="col-lg-4">
      <form class="form-horizontal" method="post" action="">
          <h3 class="">Post your comment</h3>
          <div class="form-group">
            <div class="col-sm-12">
              <input type="text" class="form-control" placeholder="Name" name="sender" autofocus>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <input type="text" class="form-control" placeholder="Location" name="location">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
                <textarea rows="6" name="message"   class="form-control" placeholder="Type comment"></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
                  <button type="reset" class="btn btn-info col-sm-4">
                      Reset
                  </button>
                  <button type="submit" name="submit" class="btn btn-primary col-sm-8">
                      Post
                  </button>
            </div>
          </div>   
      </form>
      <?php 
        require('connect.php');
        require ('functions.php');
        blog();
      ?>
    </div>
    
    <div class="col-lg-6">
                    
      <div class="entry" align="left">
        <?php
          $result = mysql_query("SELECT DISTINCT * FROM blog ORDER BY id DESC LIMIT 5");
            while($row = mysql_fetch_array($result))
            {
        ?>
        <span class="btn-block meta"><p align="left" style="margin-left:15px;">
        <strong>
          <?php echo 'Posted by <b class="text-warning">'.$row['sender']. '</b>
          <b class="muted" style="margin-left:40px;"> from '.$row['location']. '</b> <b class="muted pull-right"> On '. $row['date'].'</b>';?>
        </strong>
            
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
<?php include 'footer.php';?>