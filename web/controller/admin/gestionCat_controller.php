<?php
$q = Doctrine_Query::create();
$q->select('c.*')
->from('Categorie c')
->orderBy('c.id_categorie ASC');

//echo "<pre>";echo $q->getSqlQuery();echo "</pre>";

$livres = $q->execute();

//echo "<pre>";echo print_r($livres);echo "</pre>";

if(isset($_GET['action']) && $_GET['action'] == 'modifier'){
	
	$id = isset($_POST['id_livre']) ? $_POST['id_livre'] : $_GET['cat'];
	 // Il faut ?demment s'assurer que l'article existe
	 if(!($article = Doctrine_Core::getTable('Categorie')->find($id)))
	 {
	  //  vous de mettre un traitement personnalis?
		  if(!empty($article)){
		  	// Par exemple, on consid? qu'il s'agit d'un nouvel article.
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
	  $article->id_categorie = $_POST['id_categorie'];

	 
	  /*$article->content = $_POST['content'];*/
	 
	  // On indique l'auteur. Adaptez cela ?otre projet, par exemple si vous stockez l'id dans la session.
	  /*$article->User = $user;*/
	 
	  $article->save();
	  echo "<div class='alert-message success'>
	        <h4>Categorie modifiée !!</h4>
	        <a href='?page=gestionCat' title='Gestion des catégories'>Retour</a>
	      </div>";exit;
	 }
	 /* Nous appellerons ici la page HTML appropri? */
	include(HTML_DIR.'admin/gestionCat_modif_view.php');exit;
	/* echo"<pre>";print_r($article);echo"</pre>";exit;*/
}

if(isset($_GET['action']) && $_GET['action'] == 'supprimer')
 {
	$id = isset($_POST['id']) ? $_POST['id'] : $_GET['cat'];
	 // On s'assure que l'article existe
	 if($article = Doctrine_Core::getTable('Categorie')->find($id))
	 {
	  $article->delete();
	 }

	echo "<div class='alert-message success'>
	        <h4>Categorie supprimée !!</h4>
	        <a href='?page=gestionCat' title='Gestion des catégories'>Retour</a>
	      </div>";exit;
	 
}

	
/* Nous appellerons ici la page HTML appropri? */
include(HTML_DIR.'admin/gestionCat_view.php');
?>