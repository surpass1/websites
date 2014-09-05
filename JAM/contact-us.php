<?php include 'header.php';?>

    
    <section id="contact-page" class="container">
        <div class="row-fluid">

            <div class="span6">
                <h4>Contact Form</h4>
                <div class="status alert alert-success" style="display: none"></div>

                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                  <div class="row-fluid">
                    <div class="span5">
                        <label>First Name</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Your First Name">
                        <label>Last Name</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Your Last Name">
                        <label>Email Address</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Your email address">
                    </div>
                    <div class="span7">
                        <label>Message</label>
                        <textarea name="message" id="message" required="required" class="input-block-level" rows="8"></textarea>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary btn-large pull-right">Send Message</button>
                <p> </p>

            </form>
        </div>

        <div class="span3">
            <h4>Our Address</h4>
            <p>
                <i class="icon-map-marker pull-left"></i>
                    United States
                    <br>Chet Lozowski, Chairman
                    <br>Juna Amagara Ministries
                    <br>P.O. Box 2384
                    <br>Glen Ellyn, IL. 60138-2384
            </p>
            <p>
                <i class="icon-envelope"></i> &nbsp;info@amagara.org

            </p>
            <p>
                <i class="icon-phone"></i> &nbsp;+18-686-7491
            </p>
            <p>
                <i class="icon-globe"></i> &nbsp;http://www.amagara.org 
            </p>`
            |
        </div>

    </div>

</section>
<?php include 'footer.php';?>
