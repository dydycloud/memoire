<?php
$q = Doctrine_Query::create();
$q->select('c.*')
->from('Commandes c')
->orderBy('c.detail_id ASC');

/*echo "<pre>";echo $q->getSqlQuery();echo "</pre>";*/

$com = $q->execute();

/*echo "<pre>";echo print_r($com);echo "</pre>";*/

if(isset($_GET['action']) && $_GET['action'] == "vp")
{
	$detailcom = $_GET['detail_id'];
	/*echo $detailcom;*/
	$q = Doctrine_Query::create();
	$q->from('Details_commandes d')
	->where('d.detailcom = ?',$detailcom);

	$articles = $q->execute();
	/*echo "<pre>";echo $q->getSqlQuery();echo "</pre>";exit;*/
	
	/*print"<pre>";print_r($articles);print"</pre>";exit;*/
	include(HTML_DIR.'admin/commandevp_view.php');exit;
}

if(isset($_GET['action']) && $_GET['action'] == 'supp')
{
	$id = isset($_POST['id']) ? $_POST['id'] : $_GET['detail_id'];
	 // On s'assure que l'article existe
	$detailcom = $_GET['detail_id'];
	/*echo $detailcom;*/
	$q = Doctrine_Query::create();
	$q->from('Commandes c')
	->where('c.detail_id = ?',$detailcom);

	$articles = $q->execute();
	  
	$articles->delete();
	 
	 

	/* Nous appellerons ici la page HTML appropriée. */
	include(HTML_DIR.'admin/deletecom_view .php');exit;
}


/* Nous appellerons ici la page HTML appropriée. */
include(HTML_DIR.'admin/gestionCommande_view.php');
?>