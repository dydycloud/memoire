<?php
	$article = new Auteur();
	
	
	
	if(!empty($_POST))
	 {
	  
	  $article->nom = $_POST['nom'];

	 
	  /*$article->content = $_POST['content'];*/
	 
	  // On indique l'auteur. Adaptez cela à votre projet, par exemple si vous stockez l'id dans la session.
	  /*$article->User = $user;*/
	 
	  $article->save();
	  echo "<div class='alert-message success'>
	        <h4>Auteur ajoutÃ© !!</h4>
	        <a href='?page=gestionAut' title='Gestion des Auteurs'>Retour</a>
	      </div>";exit;
	 }

 /* Nous appellerons ici la page HTML appropriée. */
	include(HTML_DIR.'admin/ajoutAut_view.php');
?>