
<?php
if(isset($_POST) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
   extract($_POST);
   if(!empty($name) || !empty($email) || !empty($message)){
	if(!empty($name) && !empty($email) && !empty($message)){
		$nom = $_POST['name'];
		$email = $_POST['email'];
		$texte = $_POST['message'];
	
		$message=str_replace("\'","'",$message);
		$destinataire="erim32000@gmail.com";
		$sujet="Formulaire de contact";
		$message="Un nouveau message est arrivée \n
		Email : $email \n
		Message: $message";
	    $entete="From: $sujet $name \n Reply-To: $email";
		if (mail($destinataire,$sujet,$message,$entete)){
			echo "<script>alert(\"Votre message est envoyé\")</script>"; 
		}else{
			echo "<script>alert(\"Une erreur s'est produite lors de l'envoi\")</script>"; 
		}
	
   }else{
   		echo "<script>alert(\"Veuillez remplir l'ensemble du formulaire de contact\")</script>"; 		
	}
 } else{
 		echo "<script>alert(\"Le formulaire de contact est vide\")</script>"; 
 }	
}
?>

<?php 
include('ress/header.php');
 


 ?>




<div class="container" style="text-align:center">

							<header>
								<h2>Contact</h2>
							</header>

							<p>N'hésitez pas à me contacter grâce à ce formulaire.</p>
							
							<form method="post" action='contact.php'>
								<div class="row half" style="margin-bottom:15px">
									<input type="text" class="input-block-level" placeholder="Nom" name="name">
									<input type="text" class="input-block-level" placeholder="Email" name="email" style="margin-left:15">
								</div>
								<div class="row half">
									<div class="12u">
										<textarea name="message" class="input-block-level" placeholder="Message" name="message" style="width:40%;resize:none;height:200px;"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="12u">
										<input type="submit" class="btn btn-primary btn-large" placeholder="Envoyer le message" style="width:20%;margin-bottom:3%;margin-top:15px" ></input>
									</div>
								</div>
							</form>

						</div>

						 <?php include('ress/footer.php') ?>
