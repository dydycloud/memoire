<?php
$q = Doctrine_Query::create();
$q->select('a.*')
->from('Auteur a')
->orderBy('a.id_auteur ASC');

//echo "<pre>";echo $q->getSqlQuery();echo "</pre>";

$livres = $q->execute();

//echo "<pre>";echo print_r($livres);echo "</pre>";

if(isset($_GET['action']) && $_GET['action'] == 'modifier'){
	
	$id = isset($_POST['id_livre']) ? $_POST['id_livre'] : $_GET['aut'];
	 // Il faut évidemment s'assurer que l'article existe
	 if(!($article = Doctrine_Core::getTable('Auteur')->find($id)))
	 {
	  // À vous de mettre un traitement personnalisé !
		  if(!empty($article)){
		  	// Par exemple, on considère qu'il s'agit d'un nouvel article.
		  	$article = new Article();
		  }else{
		 	echo "<div class='alert-message error'>
		 	<h4>Cet article n'existe pas</h4>
	      </div>";
		 	// Ou bien :
		  	exit();
		 }
	 }
	 
	 if(!empty($_POST))
	 {
	  
	  $article->nom = $_POST['nom'];
	  $article->id_auteur = $_POST['id_auteur'];

	 
	  /*$article->content = $_POST['content'];*/
	 
	  // On indique l'auteur. Adaptez cela à votre projet, par exemple si vous stockez l'id dans la session.
	  /*$article->User = $user;*/
	 
	  $article->save();
	  echo "<div class='alert-message success'>
	        <h4>Auteur modifiÃ© !!</h4>
	        <a href='?page=gestionAut' title='Gestion des auteurs'>Retour</a>
	      </div>";exit;
	 }
	 /* Nous appellerons ici la page HTML appropriée. */
	include(HTML_DIR.'admin/gestionAut_modif_view.php');exit;
	/* echo"<pre>";print_r($article);echo"</pre>";exit;*/
}

if(isset($_GET['action']) && $_GET['action'] == 'supprimer')
 {
	$id = isset($_POST['id']) ? $_POST['id'] : $_GET['aut'];
	 // On s'assure que l'article existe
	 if($article = Doctrine_Core::getTable('Auteur')->find($id))
	 {
	  $article->delete();
	 }

	echo "<div class='alert-message success'>
	        <h4>Auteur supprimÃ© !!</h4>
	        <a href='?page=gestionAut' title='Gestion des auteurs'>Retour</a>
	      </div>";exit;
	 
}

	
/* Nous appellerons ici la page HTML appropriée. */
include(HTML_DIR.'admin/gestionAut_view.php');
?>