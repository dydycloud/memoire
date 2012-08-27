<?php 
/* Nous appellerons ici la page HTML appropriée. */
include(HTML_DIR.'recherche_view.php');

if(isset($_GET['action']) && ($_GET['action'] == 'auteur')){
		
		$q = Doctrine_Query::create();
		$q->select('a.nom')
		->from('Auteur a')
		->orderBy('a.nom ASC');
		 
		// echo "<pre>";echo $q->getSqlQuery();echo "</pre>";exit;

		$accounts = $q->execute();

		/*print "<pre>";print_r($accounts);print "</pre>";exit;*/
		include(HTML_DIR.'recherche_resultat_view.php');

		if(isset($_GET['id'])){
			$aut = $_GET['id'];
			$q = Doctrine_Query::create()
			    ->select('l.*')
			    ->from('Livres l')
			    ->where('l.id_auteur = ?',$aut);

			//echo $q->getSqlQuery();
			$accounts = $q->execute();
		 	/*print "<pre>";print_r($accounts);print "</pre>";exit;*/
			include(HTML_DIR.'rechercheAuteur_resultat_view.php');
		}
			
}

if(isset($_GET['action']) && ($_GET['action'] == 'categorie')){
		
		$quet= Doctrine_Query::create();
		
		$quet->select('c.*')
		->from('Categorie c')
		->orderBy('c.nom ASC');
		 
		//echo "<pre>";echo $quet->getSqlQuery();echo "</pre>";exit;

		$ac = $quet->execute();
	
		//print "<pre>";print_r($ac);print "</pre>";exit;
		include(HTML_DIR.'rechercheCat_resultat_view.php');

		if(isset($_GET['id_cat'])){
			$cat = $_GET['id_cat'];
			/*echo $cat;*/
			$q = Doctrine_Query::create()
			    ->select('l.*')
			    ->from('Livres l')
			    ->where('l.id_categorie = ?',$cat);

			//echo $q->getSqlQuery();
			$ac = $q->execute();
			
		 	//print "<pre>";print_r($ac);print "</pre>";exit;
		 	include(HTML_DIR.'rechercheCat_view.php');	
		}
}

if(isset($_GET['action']) && ($_GET['action'] == 'edition')){
		
		$quet= Doctrine_Query::create();
		
		$quet->select('e.nom')
		->from('Edition e')
		->orderBy('e.nom ASC');
		 
		//echo "<pre>";echo $quet->getSqlQuery();echo "</pre>";exit;

		$ac = $quet->execute();

		//print "<pre>";print_r($ac);print "</pre>";exit;
		include(HTML_DIR.'rechercheEdit_resultat_view.php');

		if(isset($_GET['id_edition'])){
			$edit = $_GET['id_edition'];
			/*echo $edit;*/
			$q = Doctrine_Query::create()
			    ->select('l.*')
			    ->from('Livres l')
			    ->where('l.id_edition = ?',$edit);

			//echo $q->getSqlQuery();
			$ac = $q->execute();
			
		 	//print "<pre>";print_r($ac);print "</pre>";exit;
		 	include(HTML_DIR.'rechercheEdit_view.php');
		}
			
}

?>


	