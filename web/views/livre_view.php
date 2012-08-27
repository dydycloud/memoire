<div class='container' style='padding-top:60px;'>
	<div class='row show-grid' title='Half and half'>
		<div class='span8'>

			
				<h2><i>Nos livres </i></h2>
						
			

		</div>
		
		<div class='span8'>
				<p>
					Etiam vehicula lacinia volutpat. Nam sit amet lobortis elit.
					Nunc luctus fringilla tristique. Pellentesque ullamcorper justo ac sem lacinia ut lobortis urna feugiat.
					Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
				</p>
		</div>
	</div>

	<pre></pre>
	<?php 
	foreach($articles->toArray() as $livre){
	?>
		<div class='row show-grid' title='Default three column layout'>
			
			<div class='span-one-third'>
				<h2><img src="<?php echo $livre['photo'];; ?>" height='150' width='150' title="<?php echo $livre['titre'];?>"/></h2>
			</div>

			<div class='span-one-third'>
				<h3 style='color:#DE6A1C;'><?php echo $livre['titre']; ?></h3>
				<br />
				<p><?php echo substr($livre['description'], 0, 100); ?></p>
			</div>
			
			<div class='span-one-third'>
				<h5 style='color:#DE6A1C;'>
					Prix : <b style='color:#404040;'><?php echo $livre['prix']; ?> €</b><br />
					Categorie : <b style='color:#404040;'> <?php echo $livre['categorie']; ?></b><br />
				</h5>
				<h4><a href='?page=detailArt&amp;id=<?php echo $livre['id_livre']; ?>' style='color:#DE6A1C;'>Voir +</a></h4>
				
			</div>
		 </div>
		 <hr />
	 <?php }?>
	<h5><a href="#" style='color:#DE6A1C;'>Haut de page</a></h5>
</div>