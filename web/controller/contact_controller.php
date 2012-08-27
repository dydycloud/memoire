<?php
	
	if(isset($_POST['envoyer']))
	{
		$expediteur= htmlentities(trim($_POST['expediteur']));
		$email= htmlentities(trim($_POST['email']));
		$sujet= htmlentities(trim($_POST['sujet']));
		$destinataire="sandy.pierre97@gmail.com";
		$message= htmlentities(trim($_POST['message']));
		if(empty($expediteur))
		{
			$errex = "<p style='color:red'>vous devez remplir le champ Expéditeur</p><br/>";
		}
		if(empty($message))
		{
			$errmess = "<p style='color:red'>vous devez remplir le champ Message</p><br/>";
		}
		if(empty($email))
		{
			$errmail = "<p style='color:red'>vous devez remplir le champ email</p><br/>";
		}
		if(empty($sujet))
		{
			$errsujet = "<p style='color:red'>vous devez remplir le champ email</p><br/>";
		}
		elseif(!empty($destinataire))
		{

			if(mail($destinataire,$sujet,$message,$expediteur))//l'ordre des arguments compte et on ne peut mettre que 4 arguments
			{
			echo '<div class="alert-message success"><h2>Votre message a bien été envoyé</h2></div>';
			}
			else
			{
			echo '<div class="alert-message error"><h2>Problème lors de l\'envoi...veuillez recommencer..svp<h2></div>';
			}
		}
	
	}
/* Nous appellerons ici la page HTML appropriée. */
include(WEB_DIR.'views/contact_view.php');
?>