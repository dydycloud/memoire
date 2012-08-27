<div class='container' style='padding-top:60px;'>
	<div class="row show-grid" title="One-third and two-thirds layout">
		
		<div class="span-one-third">
			<h2 style='color:#DE6A1C;'><?php echo $article['titre'] ;?></h2>
			<p><img src="<?php echo $article['photo'];?>" height='250' width='250' title="<?php echo $article['titre'] ;?>"/></p>
		</div>
		
		<div class="span-two-thirds">
			<h3><b style='color:#DE6A1C;'>Auteur : </b><?php echo $article['auteur'] ?></h3>
			<h3><b style='color:#DE6A1C;'>Editeur : </b><?php echo $article['edition'] ?></h3>
			<h3><b style='color:#DE6A1C;'>Categorie : </b><?php echo $article['categorie'] ?></h3>
			<h4><b style='color:#DE6A1C;'>Prix : </b><?php echo $article['prix'] ?></h4>
			<?php if(isset($_SESSION['membre']) &&$_SESSION['membre']->statut == 0){ ?>
				<a href="?page=detailArt&action=ajouter&id=<?php echo $article['id_livre'] ;?>" style='color:black;'>Ajouter au panier</a>
			<?php }else{ ?>
				<h5 style='color:#DE6A1C;'>Vous devez être membre afin d'acheter ce livre<a href="?page=connex" > Inscription/Connexion </a></h5>
			<?php } ?>
			
			
			<p></p>
		</div>

	</div>
	<div class="row show-grid" title="Unnecessary single column layout">
		
		<div class="span16">
			<h5><b style='color:#DE6A1C;'>Description : </b><br /><?php echo $article['description'] ?></h5>
		</div>

	</div>
</div>

