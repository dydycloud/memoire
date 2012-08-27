<?php 
$q = Doctrine_Query::create();
$q->select('l.*')
->from('Livres l')
->orderBy('l.id_livre ASC');


/*echo "<pre>";echo $q->getSqlQuery();echo "</pre>";*/

$articles = $q->execute();


/* Nous appellerons ici la page HTML appropriée. */
include(HTML_DIR.'livre_view.php');

?>


	