
<?php 
include('ress/header.php');
 ?>


    <div class="container">

      <!-- live -->
      <object type="application/x-shockwave-flash" height="500" width="742" id="live_embed_player_flash" data="http://www.twitch.tv/widgets/live_embed_player.swf?channel=<?php echo $name_twitch; ?>" bgcolor="#000000">
 	  <param name="allowFullScreen" value="true" />
   	  <param name="allowScriptAccess" value="always" />
   	  <param name="allowNetworking" value="all" />
   	  <param name="movie" value="http://www.twitch.tv/widgets/live_embed_player.swf" />
   	  <param name="flashvars" value="hostname=www.twitch.tv&channel=<?php echo $name_twitch; ?>&auto_play=true&start_volume=25" />
   	  </object>
   	  <!--comment-->
      

      <?php
		$selector_tchat = strtolower($selector_tchat);
if(strcmp($selector_tchat, "irc") == 0){ ?> <iframe src="https://kiwiirc.com/client/irc.kiwiirc.com/?<?php echo $channel_irc; ?>" style="border:0; width:350px; height:500px;"></iframe>  <?php }
if(strcmp($selector_tchat, "twitch") == 0){?> <iframe frameborder="0" scrolling="no" src="http://twitch.tv/<?php echo $name_twitch; ?>/chat?popout=" height="500" width="350"></iframe> <?php }	


    
      ?>
      <!--LAST VIDEO-->
      	<div class="video">
      	<h2>Mes dernières vidéos</h2>
	      <div id="videos2"></div>
			<script 
			    type="text/javascript" 
			    src="http://gdata.youtube.com/feeds/users/<?php echo $name_youtube; ?>/uploads?alt=json-in-script&callback=showMyVideos2&max-results=6">
			</script>
      	</div>
     </div>
     




 <?php include('ress/footer.php') ?>
