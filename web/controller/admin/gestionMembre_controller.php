<?php
$q = Doctrine_Query::create();
$q->select('m.*')
->from('Membres m')
->where('m.statut = 0')
->orderBy('m.pseudo ASC');

//echo "<pre>";echo $q->getSqlQuery();echo "</pre>";

$livres = $q->execute();

//echo "<pre>";echo print_r($livres);echo "</pre>";

	 
	 if(isset($_GET['action']) && $_GET['action'] == 'supprimer')
	 {
		$id = isset($_POST['id']) ? $_POST['id'] : $_GET['membre'];
		 // On s'assure que l'article existe
		 if($article = Doctrine_Core::getTable('Membres')->find($id))
		 {
		  $article->delete();
		 }

		/* Nous appellerons ici la page HTML appropriée. */
		include(HTML_DIR.'admin/delete_view.php');exit;
	}

	
/* Nous appellerons ici la page HTML appropriée. */
include(HTML_DIR.'admin/gestionMembre_view.php');
?>