<div class='container' style='padding-top:60px;'>
	<h2 style='text-align:center;'>Les commandes</h2>
	<p><br /></p>
	<table class="zebra-striped" id="sortTableExample">
			<thead>
			  <tr>
				<th class="green header headerSortUp">N° de commande</th>
				<th class="blue header">Id_user</th>
				<th class="blue header">Montant</th>
				<th class="blue header">Statut</th>
				<th class="red header">Action</th>
			  </tr>
			</thead>
			<tbody>
			  <?php 
			  foreach($com as $coms){?>
			  <tr>
					<td><?php echo $coms['detail_id'];?></td>
					<td><?php echo $coms['pseudo'];?></td>
					<td><?php echo $coms['montant'];?></td>
					<td><?php echo $coms['statut'];?></td>
					<td>
					  <a href="?page=gestionCommande&action=vp&detail_id=<?php echo $coms['detail_id'];?>">Voir +
					  </a> / 
					  <a href="?page=gestionCommande&action=supp&detail_id=<?php echo $coms['detail_id'];?>">Supprimer
					  </a>
					</td>
			  </tr>
			   <?php } ?>
			</tbody>
		  </table>
	<h5><a href="#" style="color:#DE6A1C;">Haut de page</a></h5>
</div>
<script>
    $(function() {
    $("table#sortTableExample").tablesorter({ sortList: [[1,0]] });
  });
</script>

