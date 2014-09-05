<?php
	require 'header.php';
?>
<!-- ================Carousel and pages======= -->
		<div id="myCarousel" class="carousel slide">
				<div class="carousel-inner">
					<div class="item active">
						<a href="booking.html"><img src="themes/img/widow3.jpg" class="img-circle" alt=""/></a>
						<div class="carousel-caption">
						  <h1 class="text-success"><i class ="icon-home icon-large"></i>Harvesthouse</h1>
						  <h4 class="text-warning">Bringing hope to the hopeless</h4>
						  <h5 class="offset1 text-info">Transforming lives and Nations,  turning ashes into beauty</h5>
						  <h5 class="offset1 text-error">Home for widows, Empowering the youth and Supporting children </h5>
						  <p>
						  	<button class="btn btn-large btn-success btn-block">Harvesthouse in details</button>	 
						  </p>
						</div>
					</div>
					<div class="item">
						<a href=""><img src="themes/img/youth.JPG" class="img-circle" alt=""/></a>
						<div class="carousel-caption">
						  <h4>Your slogan goes here</h4>
						  <p> 
						  	Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
						  	Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.Nullam id dolor id nibh ultricies vehicula ut id elit.
						  </p>
						</div>
					</div>
					<div class="item">
						<a href=""><img src="themes/img/widow.jpg" class="img-circle" alt=""/></a>
						<div class="carousel-caption">
						  <h4>Your slogan goes here</h4>
						 <p> 
						  	Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
						  	Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.Nullam id dolor id nibh ultricies vehicula ut id elit.
						  </p>
						</div>
					</div>
					<div class="item">
						<a href="booking.html"><img src="themes/img/health.JPG" class="img-circle" alt=""/></a>
						<div class="carousel-caption">
						  <h4>Your slogan goes here</h4>
						 <p> 
						  Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
						  Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.Nullam id dolor id nibh ultricies vehicula ut id elit.
						  </p>
						</div>
					</div>  
				</div>
				<a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="icon-chevron-left icon-large"></i></a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="icon-chevron-right icon-large"></i></a>
				</div>
				<h1>Welcome to Harvesthouse!</h1>
		<hr/>
		<p class="msg"><em>
			We reach out to widows above sixty years, empower the youth and support children in need.
		<br/>
		</p>
		<hr/>
		<div class="row">
		<div class="span12">
		  <ul id="boxWrap" class="thumbnails">
			<li class="span3">
			  <div class="thumbnail">
				<div class="caption">
				 <img src="themes/img/youth.JPG" width="200" alt="">
				  <h4>BLOCK ONE</h4>
				  <p> 
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.<br/>
				  </p>
				  <a id="blockOne" class="btn btn-large" href="detail1.html" >more</a>
				</div>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<div class="caption">
				<img src="themes/img/widows.JPG" width="200" alt=""/>
				  <h4>BLOCK TWO</h4>
				  <p> 
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.<br/>
				  </p>
				 <a id="blockTwo" class="btn btn-large" href="#" >more</a> 
				</div>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<div class="caption">
				<img src="themes/img/pss.JPG" alt=""/>
				  <h4>BLOCK THREE</h4>
				  <p> 
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.<br/>
				  </p>
				  <a id="blockThree" class="btn btn-large" href="detail3.html">more</a>
				</div>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<div class="caption">
				 <img src="themes/img/Ps.jpg" alt=""/>
				  <h4>BLOCK FOUR</h4>
				  <p> 
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.<br/>
				  </p>
				  <a id="blockFour" class="btn btn-large" href="detail4.html">more</a>
				</div>
			  </div>
			</li>
		  </ul>
		</div>
		</div>
	
		<div id="book" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="book" aria-hidden="false">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3> Online Booking your appointment</h3>
		  </div>
		<form class="form-horizontal">
		  <div class="modal-body">
			<div class="alert alert-error">
Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
			</div>	  
				<fieldset>
				<div class="control-group">
					  <select class="input-xlarge"><option>Services</option></select>
				  </div>
				<div class="control-group">
					  <input type="text" placeholder="Date" class="input-xlarge"/>
				  </div>
				  <div class="control-group">
					  <input type="text" placeholder="Time" class="input-xlarge"/>
				  </div>
				  <div class="control-group">
					  <input type="text" placeholder="name" class="input-xlarge"/>
				  </div>
				   <div class="control-group">
					  <input type="text" placeholder="email" class="input-xlarge"/>
				  </div>
				   <div class="control-group">
					  <input type="phone" placeholder="phone" class="input-xlarge"/>
				  </div>
				  <div class="control-group">
					  <textarea rows="4" placeholder="notes" id="textarea" class="input-xlarge"></textarea>
				  </div>
				</fieldset>
		  </div>
		  <div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			<button class="btn btn-primary">Confirm</button>
		  </div>
		</form>
		</div>
 <!-- Footer
 ================================================== -->
<?php require 'footer.php'; ?>