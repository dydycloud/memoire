<?php
	if(isset($_POST['pseudo'])){
		$membre = new Membres();
		
		$pseudo = $_POST['pseudo'];
		$mdp = $_POST['mdp'];	
			
		$q = Doctrine_Query::create();
			$q->select('m.*')
			->from('Membres m')
			->where('m.pseudo = ?',$pseudo)
			 ->andWhere('m.mdp = ?',$mdp);

		$user = $q->fetchOne();
		if(!empty($user)){
			$us = $user->pseudo;
		}
		if(!empty($us) && $us == $pseudo){
			
				$option = $user;
					//echo $option;exit;
					if($option->statut == 0)
					{
						$_SESSION['membre'] = $option;
						header("Location:index.php");
					}
					elseif($option->statut == 1)
					{
						
						$_SESSION['membre'] = $option;
						header("Location:?page=gestionLivre");
					}
					else
					{
						$_SESSION['membre'] = $option;
						header("Location:index.php");
					}

		}else{
				echo "<pre style='background:#DE6A1C'><h2>Mauvaise combinaison Pseudo/Mdp</h2></pre>";
		}
	}

/* Nous appellerons ici la page HTML appropriée. */
include(HTML_DIR.'membres/connexion_view.php');
?>