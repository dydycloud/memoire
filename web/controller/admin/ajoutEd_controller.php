<?php
	$article = new Edition();
	
	
	if(!empty($_POST))
	 {
	  
	  $article->nom = $_POST['nom'];

	 
	  /*$article->content = $_POST['content'];*/
	 
	  // On indique l'auteur. Adaptez cela à votre projet, par exemple si vous stockez l'id dans la session.
	  /*$article->User = $user;*/
	 
	  $article->save();
	  echo "<div class='alert-message success'>
	        <h4>Edition ajoutée !!</h4>
	        <a href='?page=gestionEd' title='Gestion des Edition'>Retour</a>
	      </div>";exit;
	 }

 /* Nous appellerons ici la page HTML appropriée. */
	include(HTML_DIR.'admin/ajoutEd_view.php');
?>