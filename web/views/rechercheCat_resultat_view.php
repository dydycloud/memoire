	<ul class="breadcrumb">
	  <li>Les Categories : </li>
	  <?php foreach($ac->toArray() as $livre){ ?>
		<li>
			<a href="?page=recherche&amp;action=categorie&amp;id_cat=<?php echo $livre['id_categorie'] ;?>" style='color:#DE6A1C;'>
				<?php echo $livre['nom'] ;?>
			</a> 
			<span class="divider">/</span>
		</li>
	  <?php }?>
	</ul>
</div>
