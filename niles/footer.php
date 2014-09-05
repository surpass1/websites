<!-- 
Clients 
-->
<section class="our_client">
		
	<div class="row">
		<br/>
		<h4 class="title cntr"><span class="text">PATNERS</span></h4>
		
		<div class="span2">
			<a href="#"><img alt="first patner" src=""></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="second patner" src=""></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="third patner" src=""></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="fourth patner" src=""></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="fifth patner" src=""></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="sixth patner" src=""></a>
		</div>
	</div>
</section>

<!--
Footer
-->
<footer class="footer">
<div class="row-fluid">
<div class="span6">
<div class="fb-comments" data-href="http://example.com/comments" data-width="https://www.facebook.com/paul.kawalya" data-numposts="1" data-colorscheme="light"></div>
</div>
 <div class="span6">
<h5>TODAY'S INSPIRATION</h5>
The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
 those interested. 
 </div>
 </div>
</footer>
</div><!-- /container -->

<div class="copyright">
<div class="container">
	<p class="pull-right">
		Contact
	</p>
	<span>Copyright &copy; 2014 TopBrainz</span>
</div>
</div>
<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
    <script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="assets/js/shop.js"></script>
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
        case 'c.html':
         $('#li_cont').addClass('active') ;
         break;
        }
        });
    </script>
  </body>
</html>