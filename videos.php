
<?php 
include('ress/header.php');
 ?>


    <div class="container">
 <div class="video">
   	<h2>Mes vidéos:</h2>

	<div id="videos2"></div>
<script 
    type="text/javascript" 
    src="http://gdata.youtube.com/feeds/users/<?php echo $name_youtube; ?>/uploads?alt=json-in-script&callback=showMyVideos2&max-results=24">
</script>

      	</div>
     </div>

 <?php include('ress/footer.php') ?>
