<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>TopBrainz Africa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="assets/css/TBA-background.css" rel="stylesheet">
    <link rel="stylesheet" href="jquery/bannerRotator.css">
    <link rel="shortcut icon" href="Images/logo.png"/>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    

    <!-- Le fav and touch icons -->
    
  </head>

  <body data-spy="scroll" data-target=".subnav" data-offset="50">


  <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top navbar-inverse">	
      <div class="navbar-inner">
        <div>
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#" style="margin-right:25px;"><font color="#2F97FF">Top</font><font color="#FF8000">Brainz</font></a>
          <div class="nav-collapse">
            <ul class="nav">
              
          
              <li class="">
                <a href="">Sign in</a>
              </li>
              <li class="divider-vertical"></li>
              <li class="">
                <a href="">Sign up</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">

<!-- Masthead
================================================== -->
<header class="jumbotron subhead" id="overview" style="padding-top:1px;">
  <h1><img src="Images/logo.png" class="img-circle" width="100"/><font class="text-info">Top</font><font color="#FF8000">Brainz</font><font class="pull-right" size="+1"><?php $Date = date("l F d, Y, g:i a"); echo $Date;?></font></h1>
  <p class="lead">Think, believe, design and innovatively deploy<font class="pull-right"><img src="Images/facebook.png" width="40"/><img src="Images/twitter.png" width="40"/><img src="Images/youtube.png" width="40"/></font></p>
  <div class="subnav">
    <ul class="nav nav-pills">
       	  <li class="">
            <a href="index.php">Home</a>
          </li>
          
          <li class="dropdown" id="accountmenu">  
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">About Us<b class="caret"></b></a>  
            <ul class="dropdown-menu">  
                <li><a href="About Us.php">About</a></li>
                <li><a href="structure.php">Structure</a></li>  
                <li class="divider"></li>  
                <li><a href="">Management</a></li>  
            </ul>  
          </li> 
          
          <li class="">
            <a href="Contact Us.php">Contact us</a>
          </li>
          
          <li class="">
            <a href="Services.php">Services</a>
          </li>
          
          <li class="dropdown pull-right" id="accountmenu">  
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="text-decoration:blink;">Coming soon<b class="caret"></b></a>  
            <ul class="dropdown-menu">  
                <li><a href="#">Topbrainz magazine</a></li>  
                <li><a href="#">Topbrainz community</a></li>  
                <li class="divider"></li>  
                <li><a href="#">Brainz quiz</a></li>  
                <li><a href="#">Brainz code jams</a></li>
                <li><a href="#">Brainz counsellor</a></li>
                  
            </ul>  
          </li> 

    </ul>
  </div>
</header>
