<?php 
$q = Doctrine_Query::create();
$q->select('l.*')
->from('Livres l')
->orderBy('l.date DESC')
->limit(2);

/*echo "<pre>";echo $q->getSqlQuery();echo "</pre>";*/

$accounts = $q->execute();

/*print_r($accounts->toArray());*/

/*print "<pre>";print_r($livres);exit;print "</pre>";*/

$text = "<div class='container' style='padding-top:60px;'><div class='row show-grid' title='Half and half'>
    <div class='span8'>

		
			<h2>
			<br />
				    				
			La lecture est au seuil de la vie spirituelle 

			elle peut nous y introduire :

			elle ne la constitue pas... <br />

			[Marcel Proust]
			</h2>
			    	
		

    </div>
    
	<div class='span8'>

	    	<h2 style='color:#DE6A1C'>Bienvenue sur <i>Lire pour être </i></h2>
			<p>
				<br />
				Etiam vehicula lacinia volutpat. Nam sit amet lobortis elit.
				Nunc luctus fringilla tristique. Pellentesque ullamcorper justo ac sem lacinia ut lobortis urna feugiat.
				Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
				Mauris sit amet leo tellus; at egestas nulla. Pellentesque sapien velit, cursus a dictum eu, pulvinar sed tortor.
				
			</p>
	</div>
</div>

<p><br /></p>
<h2 style='text-align:center;color:#DE6A1C'>Nos Derniers Livres </h2>
<pre></pre>";
	
	echo $text;

foreach($accounts->toArray() as $livre){
	$title = $livre['titre'];
	$photo = $livre['photo'];
	$prix = $livre['prix'];
	$id = $livre['id_livre'];
	$categorie = $livre['categorie'];
	$content = $livre['description'];
	$lien = "<h5><a href='?page=detailArt&amp;id=".$id."' style='color:#DE6A1C;'>Voir +</a></h5>";

	

	echo "<div class='row show-grid' title='Default three column layout'>
    <div class='span-one-third'><h2>"."<img src=".$photo." height='150' width='150' title=".$title."/></h2></div>
    <div class='span-one-third'>";
	
	echo "<h3 style='color:#DE6A1C;'>".$title."</h3><br /><p>".substr($content, 0, 100)."</p></div>
    <div class='span-one-third'>";
	
	echo "<h5 style='color:#DE6A1C;'>Prix : <b style='color:#404040;'>".$prix." €</b><br /> Categorie : <b style='color:#404040;'>".$categorie."</b><br /></h5>".$lien."</div>
  </div><br />";
}
	echo'<h5><a href="#" style="color:#DE6A1C;">Haut de page</a></h5></div>';


/* Nous appellerons ici la page HTML appropriée. */
include(HTML_DIR.'index_view.php');
?>


	