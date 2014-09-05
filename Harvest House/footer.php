
<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4 class="text-warning" align="center">Study with us the Word of GOD</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-actions" action="index.php" method="post" id="form-login">
            <input type="text" class="input-xlarge" placeholder="Enter your Name"/>
            <input type="text" class="input-xlarge" placeholder="Enter your Email">
            <button type="submit" class="btn btn-large btn-primary">Subscribe</button>
        </form>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->

<footer class="footer">
  <div class="container">
    <div class="span4 pull-right">
      <a href="#"><img style="max-width:45px" src="themes/css/images/facebook.png" title="facebook"></a>
      <a href="#"><img style="max-width:45px" src="themes/css/images/twitter.png" title="twitter"></a>
      <a href="#"><img style="max-width:45px" src="themes/css/images/rss.png" title="rss"></a>
      <a href="#"><img style="max-width:45px" src="themes/css/images/youtube.png" title="youtube"></a>
    </div>
    <p>&copy;2012 <br/><em> Copyright informations <a href="#">Terms and Conditions, </a> <a href="comingsoon.html">Coming soon page</a></em></p>
  </div>
</footer>


<script src="bootstrap/js/jquery.js"></script>  
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script>
    // carousel demo
    $('#myCarousel').carousel()
    </script>
 <script type="text/javascript">
        function GetCurrentPageName() { 
        //method to get Current page name from url. 
        var PageURL = document.location.href; 
        var PageName = PageURL.substring(PageURL.lastIndexOf('/') + 1); 
         
        return PageName.toLowerCase() ;
        }
         
        $(document).ready(function(){
        var CurrPage = GetCurrentPageName();
         
        switch(CurrPage){
        case 'index.php':
         $('#li_home').addClass('active') ;
         break;
        case 'aboutus.php':
         $('#li_about').addClass('active') ;
         break;
        case '':
         $('#li_cont').addClass('active') ;
         break;
        }
        });
    </script>
</body>
</html>