<?php 

    function blog(){
      if(isset($_POST['submit']))
      {
        $message=trim($_POST['message']);
        $sender=trim($_POST['sender']);
        $location=trim($_POST['location']);
        $date=date("Y/m/d g:i:s a");
        if(!$message || !$sender || !$location){
          echo '<P class="text-error pull-left offset1" style="text-decoration:blink">Fill in the all the fields</p>';
        }
        else{
          
        $query="SELECT  sender='$sender',location='$location' FROM blog WHERE  message='$message'";
        if($qry_run=mysql_query($query)){
          if(mysql_num_rows($qry_run)==0){
            $qry = mysql_query("INSERT INTO blog(message, sender, location, date)VALUES('$message', '$sender', '$location', '$date')");
            if($qry){
            echo '<p class="btn-majoo" align="center">Post successfully submitted</p>';         
            }
            else { '<p class="btn-majoo" align="center">Post not submitted, try again</p>'; }
          }
          else{ echo 'Try again';}
        }
        
        else{ echo 'Comment already submitted';}
        
      }
        }
    
    }
    
    
  ?>