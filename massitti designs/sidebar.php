<script type="text/javascript">
		$(document).ready(function(e) {
		   var opr=$("#opr ul li a");
		   
		   opr.click(function(){
			  var opr_click=$(this).attr('rel');
				
			switch(opr_click){
				case "waterfall":
					$("#fr_opr").load("waterfall.php");
					break;
				case "v_pro":
					$("#fr_opr").load("products/view_pro.php");	
					break;
				
				case "b_pro":
					$("#fr_opr").load("products/blogview.php");	
					break;
				case "e_pro":
					$("#fr_opr").load("products/contacts.php");	
					break;
					
				}  	  
		   });  
		});
</script>

<div class="picture" id="opr">

 <ul class="nav nav-list bs-docs-sidenav affix-top feedback_go well" style="padding-left:10px; background-color:#F0F0F0" type="square">
    <li><a rel="waterfall" href="">Waterfall/Fountains</a></li>
    <li><a href="#router">Gardens</a></li>
    <li><a href="#charger">Pavings</a></li>
    <li><a href="landscape.php">Artificial landscapes</a></li>
    <li><a href="wallart.php">Wall art</a></li>
    <li><a href="#modem">Paintings</a></li>
    <li><a href="#router">3D drawing</a></li>
    <li><a href="#charger">Illustrations</a></li>
    <li><a href="#memo">Jewery</a></li>
    <li><a href="#phone">Swimming Pools</a></li>
    <li><a href="pools.php">Pools</a></li>
    <li><a href="#router">Basticks</a></li>
    <li><a href="#charger">Sculptures</a></li>
    <li><a href="#memo">Rock designs</a></li>
    
  </ul><br/>

</div>
