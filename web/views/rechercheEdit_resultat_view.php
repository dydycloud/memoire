	<ul class="breadcrumb">
	  <li>Les Editions : </li>
	  <?php foreach($ac->toArray() as $livre){ ?>
		<li>
			<a href="?page=recherche&amp;action=edition&amp;id_edition=<?php echo $livre['id_edition'] ;?>" style='color:#DE6A1C;'>
				<?php echo $livre['nom'] ;?>
			</a> 
			<span class="divider">/</span>
		</li>
	  <?php }?>
	</ul>
</div>
