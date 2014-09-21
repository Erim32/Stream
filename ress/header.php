<?php include("var.php"); ?>



<!DOCTYPE html>
<html>
<header>
<title><?php echo  $title_site; ?></title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<!-- custom css -->
<link rel="stylesheet" href="style.css">
<!--zoombox css-->
  <link href="zoombox/zoombox.css" rel="stylesheet" type="text/css" media="screen" />
<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!--VIDEO-->
<script type="text/javascript" src="http://swfobject.googlecode.com/svn/trunk/swfobject/swfobject.js"></script>
<script src="ress/video.js"></script>
<!---zoombox-->
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
   <script type="text/javascript" src="zoombox/zoombox.js"></script>


    <script type="text/javascript">
        jQuery(function($){
            $('a.zoombox').zoombox();

            $('a.zoombox').zoombox({
                theme       : 'zoombox',        //available themes : zoombox,lightbox, prettyphoto, darkprettyphoto, simple
                opacity     : 0.8,              // Black overlay opacity
                duration    : 800,              // Animation duration
                animation   : true,             // Do we have to animate the box ?
                width       : 800,              // Default width
                height      : 600,              // Default height
                gallery     : false,             // Allow gallery thumb view
                autoplay : false                // Autoplay for video
            });
            
        });


        </script>
</header>

<body>
<div id="main">
 	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><?php echo $title; ?></a>
        </div>
        <div class="navbar-collapse collapse">
           <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Live</a></li>
       		  <li><a href="videos.php">Videos</a></li>
       		  <li><a href="contact.php">Contact</a></li>
            </ul>
        </div><!--/.navbar-collapse -->
      </div>
   </div>