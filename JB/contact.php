<?php
  include 'header.php';
?>

<div class="pageTitle">
    <div class="container">
        <h2 class="lead" style="margin-left:150px;">CONTACT US</h2>
    </div>
</div>
<div class="row" style="margin-top:50px; margin-left:60px; ">
    <div class="col-lg-7">
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["comments"])) {
                    $body = "Name: {$_POST['name']}\n\nComments:{$_POST['comments']}";
                    $body = wordwrap($body, 70);
        
                    mail('nickbownes@hotmail.com', 'Contact Form Submission', $body, "From:{$_POST['email']}");
                    echo "<p><em>Thank you for contacting me. I will reply some day.</em></p>";
                    $_POST = array();
                } else {
                    echo '<p style="font-weight:bold; color:#Coo;">Please fill out the form completely.</p>';
                }
            }
        ?>
            
            <form class="form-horizontal" role="form" method="post" action="contact.php">
                <div class="form-group">
                    <label for="txt_email" class="col-sm-2 control-label">
                        Name
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="txt_email"  value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?> " placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="txt_password" class="col-sm-2 control-label">
                        Email
                    </label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" id="txt_password" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"  placeholder="Email">
                    </div>
                </div>
        
                <div class="form-group">
                    <label for="txt_password" class="col-sm-2 control-label">
                        Message
                    </label>
                    <div class="col-sm-10">
                        <textarea type="text" name="comments" class="form-control" rows="6" >
                        <?php if (isset($_POST['comments'])) echo $_POST['comments']; ?></textarea> 
                    </div>
                </div>
                ﻿
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        
                        <button type="submit" name="submit" class="btn btn-primary btn-block">
                            Send
                        </button>
                    </div>
                </div>
            </form>
          </div>
     
        <div class="col-lg-4">
            <p>Head office: <strong>JB close, Garuga Road off Kampala-Entebbe Highway</strong>
            </p>
            <p>Tel: <strong>+256 77256716, +256 704920294</strong>
            </p>
            <hr>
            <p><strong>West Nile Regional Offices</strong>
                       KKT plaza-Market Lane 3RD floor
                <br/>
                        B318 Arua Town
            </p>
        </div>
      </div>
                 
      <div style="margin-bottom:40px;">

          
      </div>
  <?php
      include 'footer.php';     
  ?>