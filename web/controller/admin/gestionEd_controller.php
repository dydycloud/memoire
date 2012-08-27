<?php
$q = Doctrine_Query::create();
$q->select('e.*')
->from('Edition e')
->orderBy('e.id_edition ASC');

//echo "<pre>";echo $q->getSqlQuery();echo "</pre>";

$article = $q->execute();

//echo "<pre>";echo print_r($livres);echo "</pre>";

if(isset($_GET['action']) && $_GET['action'] == 'modifier'){
	
	$id = isset($_POST['id_livre']) ? $_POST['id_livre'] : $_GET['ed'];
	 // Il faut ?demment s'assurer que l'article existe
	 if(!($article = Doctrine_Core::getTable('Edition')->find($id)))
	 {
	  //  vous de mettre un traitement personnalis?
		  if(!empty($article)){
		  	// Par exemple, on consid? qu'il s'agit d'un nouvel article.
		  	$article = new Article();
		  }else{
		 	echo "<div class='alert-message error'>
		 	<h4>Cet Edition n'existe pas</h4>
	      </div>";
		 	// Ou bien :
		  	exit();
		 }
	 }
	 
	 if(!empty($_POST))
	 {
	  
	  $article->nom = $_POST['nom'];
	  $article->id_edition = $_POST['id_edition'];

	 
	  /*$article->content = $_POST['content'];*/
	 
	  // On indique l'auteur. Adaptez cela ?otre projet, par exemple si vous stockez l'id dans la session.
	  /*$article->User = $user;*/
	 
	  $article->save();
	  echo "<div class='alert-message success'>
	        <h4>Edition modifiée !!</h4>
	        <a href='?page=gestionEd' title='Gestion des Editions'>Retour</a>
	      </div>";exit;
	 }
	 /* Nous appellerons ici la page HTML appropri? */
	include(HTML_DIR.'admin/gestionEd_modif_view.php');exit;
	/* echo"<pre>";print_r($article);echo"</pre>";exit;*/
}

if(isset($_GET['action']) && $_GET['action'] == 'supprimer')
 {
	$id = isset($_POST['id']) ? $_POST['id'] : $_GET['ed'];
	 // On s'assure que l'article existe
	 if($article = Doctrine_Core::getTable('Edition')->find($id))
	 {
	  $article->delete();
	 }

	echo "<div class='alert-message success'>
	        <h4>Edition supprimée !!</h4>
	        <a href='?page=gestionEd' title='Gestion des Editions'>Retour</a>
	      </div>";exit;
	 
}

	
/* Nous appellerons ici la page HTML appropri? */
include(HTML_DIR.'admin/gestionEd_view.php');
?>