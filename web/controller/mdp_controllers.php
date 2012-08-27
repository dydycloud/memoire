<?php
if (isset($_POST['envoyer'])) {
	$email = $_POST['email'];
	

	$q = Doctrine_Query::create();

	$q->from('Membres m')

	->where('m.email = ?', $email)

	->execute();

	$article = $q->fetchOne();
	
	if (!empty($article->email)) {
		$expediteur= "Voici vos identifiant pour le site lire pour être";
		$email= "sandy.pierre97@gmail.com";
		$sujet= "Vos identifiants";
		$destinataire = htmlentities(trim($article->email));
		$message= "Pseudo : ".$article->pseudo ." :: Mot de passe : ".$article->mdp."";
		if(empty($email))
		{
			$errmail = "<p style='color:red'>vous devez remplir le champ email</p><br/>";
		}
		elseif(!empty($email))
		{

			if(mail($destinataire,$sujet,$message,$expediteur))//l'ordre des arguments compte et on ne peut mettre que 4 arguments
			{
				echo '<div class="alert-message success">
					  <p><strong>Votre Mot de passe vous à été envoyé à l\'adresse suivante : '.$_POST['email'].'</strong></p>
				</div>';
			}
			else
			{
				echo "<h2 style='color:red'>Problème lors de l'envoi...veuillez recommencer..svp<h2>";
			}
		}

		
	}else{
		echo '<div class="alert-message error">
				  <p><strong>Cet Email n\'est pas présent dans notre base.</strong></p>
			</div>';
	}
	
	//print"<pre>";print_r($article);print"</pre>";
}
/* Nous appellerons ici la page HTML appropri�e. */
include(WEB_DIR.'views/mdp_view.php');
?>