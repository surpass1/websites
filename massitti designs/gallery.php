<?php require 'header.php';?>
<div class="container paul">
<link rel="stylesheet" href="phpgallery/css/screen.css" type="text/css" media="screen" />
<link rel="stylesheet" href="phpgallery/css/lightbox.css" type="text/css" media="screen" />
<br /><br /><br /><br />

<div class="section" id="example">
<div class="imageRow" style="margin-left:60px;">
<div class="set picture">
	
<?php
	include('connect.php');
	$result = mysql_query("SELECT * FROM photos");
	while($row = mysql_fetch_array($result))
	{
		echo '<div class="single">
			  <div class="wrap">
			  <a href="'.$row['imagepath'].'" rel="lightbox[plants]" title="'.$row['caption'].'">
			  <img src="'.$row['imagepath'].'" alt="massitti: image 1 0f 4 thumb" /></a>
			</div></div>';
	}				
?>		
		
		
		
  	</div>
  </div>
	
</div>

<hr />
</div>
<!-- end #content -->

<script src="phpgallery/js/jquery-1.7.2.min.js"></script>
<script src="phpgallery/js/jquery-ui-1.8.18.custom.min.js"></script>
<script src="phpgallery/js/jquery.smooth-scroll.min.js"></script>
<script src="phpgallery/js/lightbox.js"></script>

<script>
  jQuery(document).ready(function($) {
      $('a').smoothScroll({
        speed: 1000,
        easing: 'easeInOutCubic'
      });

      $('.showOlderChanges').on('click', function(e){
        $('.changelog .old').slideDown('slow');
        $(this).fadeOut();
        e.preventDefault();
      })
  });

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2196019-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php require 'footer.php';?>