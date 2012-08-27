<div class='container' style='padding-top:60px;'>
	<h2>Mes commandes</h2>
	<p><br /></p>
	<h5><a href="?page=profil" style="color:#DE6A1C;">Retour vers le Profil</a></h5>
	<p><br /></p>
	<table class="zebra-striped" id="sortTableExample">
			<thead>
			  <tr>
				<th class="blue header headerSortUp">N° de commande</th>
				<th class="blue header">Montant</th>
				<th class="green header">Statut</th>
				<th class="red header">Action</th>
			  </tr>
			</thead>
			<tbody>
			  <?php 
			  foreach($article as $com){?>
			  <tr>
					<td><?php echo $com['detail_id'];?></td>
					<td><?php echo $com['montant'];?></td>
					<td><?php echo $com['statut'];?></td>
					<td><a href="?page=profil&action=commande&id=<?php echo $com['detail_id'];?>&voirplus=vp&detail_id=<?php echo $com['detail_id'];?>">Voir +
					</a></td>
			  </tr>
			   <?php } ?>
			</tbody>
		  </table>
	<h5><a href="#" style="color:#DE6A1C;">Haut de page</a></h5>
</div>
<script>
    $(function() {
    $("table#sortTableExample").tablesorter({ sortList: [[0,0]] });
  });
</script>


