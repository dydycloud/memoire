<div class='container' style='padding-top:60px;'>
	<ul class="breadcrumb">
	  <?php foreach($accounts as $livre){ ?>
		<li><h1><?php echo $livre['titre'] ;?></h1></li>
		<li><img src="<?php echo $livre['photo'];; ?>" height='150' width='150' title="<?php echo $livre['titre'];?>"/></li>
		<li><p>Date de Parution : <?php echo $livre['date_parution'] ;?></p></li>
		<li><p>Edition : <?php echo $livre['edition'] ;?></p></li>
		<li><p>Description : <br /><?php echo $livre['description'] ;?></p></li>
		
	  <?php }?>
	  	<?php if(isset($_SESSION['membre']) &&$_SESSION['membre']->statut == 0){ 
		if (!empty($livre['id_livre'])) {
			// Type your code here
		?>
		
		<li><button class="btn success" style='background:#DE6A1C;color:black;'><a href="?page=detailArt&action=ajouter&id=<?php echo $livre['id_livre'] ;?>" style='color:black;'>Ajouter au panier</a></button></li>
	<?php }else{echo "Pas de resultats.";}}else{ ?>
	
		<li style='color:#DE6A1C;'>Vous devez être membre afin d'acheter un livre<a href="?page=connex" > Inscription/Connexion </a></li>
	<?php } ?>

	</ul>
	
	<h5><a href="#" style='color:#DE6A1C;'>Haut de page</a></h5>
</div>