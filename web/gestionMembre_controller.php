<?php
$q = Doctrine_Query::create();
$q->select('m.*')
->from('Membres m')
->orderBy('m.pseudo ASC');

//echo "<pre>";echo $q->getSqlQuery();echo "</pre>";

$livres = $q->execute();

	
/* Nous appellerons ici la page HTML appropriée. */
include(HTML_DIR.'admin/gestionMembre_view.php');
?>