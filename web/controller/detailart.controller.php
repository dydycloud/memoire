<?php
$id = isset($_POST['id']) ? $_POST['id'] : $_GET['id'];

// Il faut évidemment s'assurer que l'article existe
/*if(!($article = Doctrine_Core::getTable('Livres')->find($id)))
{
// À vous de mettre un traitement personnalisé !

// Par exemple, on considère qu'il s'agit d'un nouvel article.
$article = new Article();
// Ou bien :
exit();*/

$q = Doctrine_Query::create();

$q->from('Livres l')

->where('l.id_livre = ?', $id)

->execute();

$article = $q->fetchOne();
/*print"<pre>";print_r($article);print"</pre>";*/

if(!isset($_SESSION['panier'])){
	
	//creation de mon objet panier
	$monpanier = new Panier();
	$_SESSION['panier'] = $monpanier;
}
else{
	
	//sinon (il existe) on l'assigne à la variable monpanier
	$monpanier = $_SESSION['panier'];	
}

if(isset($_GET['action']) && ($_GET['action'] == 'ajouter'))
{

	//on ajoute
	$monpanier->addArticle(array(
		'photo'=>$article['photo'],
		'id_livre'=>$article['id_livre'],
		'user'=>$_SESSION['membre']->id_membres,
		'titre'=>$article['titre'],
		'prix'=>$article['prix'],
		'quantite'=>1));


	/*print"<pre>";print_r($monpanier);print"</pre>";exit;*/


	// plus de manipulation dans le panier , on le remet en session !
	$_SESSION['panier'] = $monpanier;

	/*$monpanier->deleteBasket();*/

	print"<pre>";print_r($monpanier);print"</pre>";/*exit;*/
	header('Location: ?page=panier');
}


  
/* Nous appellerons ici la page HTML appropriée. */
include(WEB_DIR.'views/detailart_view.php');


 ?>