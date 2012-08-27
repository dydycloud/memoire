<?php
$q = Doctrine_Query::create();
$q->select('l.*')
->from('Livres l')
->orderBy('l.id_livre ASC');

//echo "<pre>";echo $q->getSqlQuery();echo "</pre>";

$livres = $q->execute();

//echo "<pre>";echo print_r($livres);echo "</pre>";

if(isset($_GET['action']) && $_GET['action'] == 'modifier'){
	
	$id = isset($_POST['id_livre']) ? $_POST['id_livre'] : $_GET['livre'];
	 // Il faut évidemment s'assurer que l'article existe
	 if(!($article = Doctrine_Core::getTable('Livres')->find($id)))
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
	  $article->titre = $_POST['titre'];
	  $article->auteur = $_POST['auteur'];
	  $article->id_auteur = $_POST['id_auteur'];
	  $article->date_parution = $_POST['date_parution'];
	  $article->edition = $_POST['edition'];
	  $article->id_edition = $_POST['id_edition'];
	  $article->description = $_POST['description'];
	  $article->categorie = $_POST['categorie'];
	  $article->id_categorie = $_POST['id_categorie'];
	  $article->prix = $_POST['prix'];
	  $article->photo = $_POST['photo'];
	  $article->qte = $_POST['qte'];

	 
	  /*$article->content = $_POST['content'];*/
	 
	  // On indique l'auteur. Adaptez cela à votre projet, par exemple si vous stockez l'id dans la session.
	  /*$article->User = $user;*/
	 
	  $article->save();
	  echo "<div class='alert-message success'>
	        <h4>Livre modifié !!</h4>
	        <a href='?page=gestionLivre' title='Gestion des livres'>Retour</a>
	      </div>";exit;
	 }
	 /* Nous appellerons ici la page HTML appropriée. */
	include(HTML_DIR.'admin/gestionLivre_modif_view.php');
	/* echo"<pre>";print_r($article);echo"</pre>";exit;*/
}

if(isset($_GET['action']) && $_GET['action'] == 'supprimer')
 {
	$id = isset($_POST['id']) ? $_POST['id'] : $_GET['livre'];
	 // On s'assure que l'article existe
	 if($article = Doctrine_Core::getTable('Livres')->find($id))
	 {
	  $article->delete();
	 }

	/* Nous appellerons ici la page HTML appropriée. */
	include(HTML_DIR.'admin/deleteLivre_view.php');exit;
}

	
/* Nous appellerons ici la page HTML appropriée. */
include(HTML_DIR.'admin/gestionLivre_view.php');
?>