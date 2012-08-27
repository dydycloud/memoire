<?php 
/* Nous appellerons ici la page HTML appropriée. */
if(isset($_GET['action']) && $_GET['action'] == "commande")
{
	$id = $_GET['id'];
	$q = Doctrine_Query::create();
	$q->from('Commandes c')
	->where('c.pseudo = ?', $id)
	->orderBy('c.detail_id DESC');

	$article = $q->execute();
	
	if(isset($_GET['voirplus']) && $_GET['voirplus'] == "vp")
	{
		$detailcom = $_GET['id'];
		/*echo $detailcom;*/
		$q = Doctrine_Query::create();
		$q->from('Details_commandes d')
		->where('d.detailcom = ?',$detailcom);

		$articles = $q->execute();
		/*echo "<pre>";echo $q->getSqlQuery();echo "</pre>";exit;*/
		
		/*print"<pre>";print_r($articles);print"</pre>";exit;*/
		include(HTML_DIR.'membres/profilvp_view.php');exit;
	}
	include(HTML_DIR.'membres/profilcom_view.php');exit;
}

if(isset($_GET['action']) && $_GET['action'] == "modifier")
{
	if(isset($_POST['modifier'])){
	$id = $_SESSION['membre']->id_membres;

	 // Il faut évidemment s'assurer que l'article existe
	 if(!($membre = Doctrine_Core::getTable('Membres')->find($id)))
	 {
	  // Par exemple, on considère qu'il s'agit d'un nouvel article.
	  $membre = new Membres();

	  // Ou bien :
	  exit();
	 }
	 
		 if(!empty($_POST))
		 {
		  $membre->pseudo = $_POST['pseudo'];
		  $membre->mdp = $_POST['mdp'];
		  $membre->nom = $_POST['nom'];
		  $membre->prenom = $_POST['prenom'];
		  $membre->email = $_POST['email'];
		  $membre->ville = $_POST['ville'];
		  $membre->cp = $_POST['cp'];
		  $membre->adresse = $_POST['adresse'];

		//print"<pre>";print_r($membre);print"</pre>";exit;

		$_SESSION['membre']->pseudo = $_POST['pseudo'];
		$_SESSION['membre']->mdp = $_POST['mdp'];
		$_SESSION['membre']->nom = $_POST['nom'];
		$_SESSION['membre']->prenom = $_POST['prenom'];
		$_SESSION['membre']->email = $_POST['email'];
		$_SESSION['membre']->ville = $_POST['ville'];
		$_SESSION['membre']->cp = $_POST['cp'];
		$_SESSION['membre']->adresse = $membre->adresse;

		//print"<pre>";print_r($_SESSION['membre']->prenom);print"</pre>";exit;
		  $membre->save();
		  
		  echo "<div class='alert-message success'>
		  <h4>Profil modifié !!</h4>
		  	<a href='?page=profil' title='Profil'>retour vers le profil</a>
		  </div>";exit;
		 }
	}
	include(HTML_DIR.'membres/profil_modif_view.php');exit;
}

include(HTML_DIR.'membres/profil_view.php');
?>


	