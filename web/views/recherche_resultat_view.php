<ul class="breadcrumb">

  <li>Les Auteurs : </li>

  <?php foreach($accounts->toArray() as $livre){ ?>
  	<li>

	  	<a href="?page=recherche&amp;action=auteur&amp;aut=<?php echo $livre['nom'] ;?>&amp;id=<?php echo $livre['id_auteur'] ;?>" style='color:#DE6A1C;'>
	  		<?php echo $livre['nom'] ;?>
	  	</a> 

	  	<span class="divider">/</span>

  	</li>
  <?php }?>
  
</ul>
</div>
