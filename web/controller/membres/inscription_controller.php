<?php
if(!empty($_POST))
	{
		$membre = new Membres();
		$pseudo = $_POST['pseudo'];
		
		
		$q = Doctrine_Query::create();
			$q->select('m.*')
			->from('Membres m')
			->where('m.pseudo = ?',$pseudo);

		$article = $q->fetchOne();
			
		if(!empty($article->pseudo)){
			$com = $article->pseudo;
		}else{
			$com = "";
		}

		if($com === $pseudo){
			echo "<pre style='background:#DE6A1C'><h3>Ce pseudo est indisponible !</h3></pre>";
		}else{
			
		$membre->pseudo = htmlentities(trim($_POST['pseudo']));
		$membre->mdp = htmlentities(trim($_POST['mdp']));
		$membre->nom = htmlentities(trim($_POST['nom']));
		$membre->prenom = htmlentities(trim($_POST['prenom']));
		$membre->email = htmlentities(trim($_POST['email']));
		$membre->ville = htmlentities(trim($_POST['ville']));
		$membre->cp = htmlentities(trim($_POST['cp']));
		$membre->adresse = htmlentities(trim($_POST['adresse']));

		$expediteur= "Voici vos identifiant pour le site lire pour être";
		$email= "sandy.pierre97@gmail.com";
		$sujet= "Vos identifiants pour votre compte sur Lire pour être";
		$destinataire = htmlentities(trim($membre->email));
		$message = "Pseudo : ".$membre->pseudo ." //  Mot de passe : ".$membre->mdp."";
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
		
		$membre->save();
		echo "<div class='alert-message success'>
		<h3>Inscription ok! Vous pouvez vous connecter <a href='?page=connex' title='connex'>ici</a></h3>
		</div>";
		}
		
	}


/* Nous appellerons ici la page HTML appropriée. */
include(HTML_DIR.'membres/inscription_view.php');
?>