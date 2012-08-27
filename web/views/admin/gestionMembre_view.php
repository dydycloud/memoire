<div class='container' style='padding-top:60px;'>
	<h2 style='text-align:center;'>Liste des Membres</h2>
	<p><hr /></p>
	<table class="zebra-striped" id="sortTableExample">
			<thead>
			  <tr>
				<th class="yellow header"></th>
				<th class="blue header headerSortDown">ID</th>
				<th class="green header">Pseudo</th>
				<th class="green header">Mdp</th>
				<th class="green header">Nom</th>
				<th class="green header">Prénom</th>
				<th class="green header">Email</th>
				<th class="green header">Ville</th>
				<th class="green header">cp</th>
				<th class="green header">adresse</th>
				<th class="red header">Actions</th>
				<th class="yellow header"></th>
			  </tr>
			</thead>
			<tbody>
			 <?php foreach($livres->toArray() as $livre){ ?>
			 <tr>
				<td></td>
				<td><?php echo $livre['id_membres']; ?></td>
				<td><?php echo $livre['pseudo']; ?></td>
				<td><?php echo $livre['mdp']; ?></td>
				<td><?php echo $livre['nom']; ?></td>
				<td><?php echo $livre['prenom']; ?></td>
				<td><?php echo $livre['email']; ?></td>
				<td><?php echo $livre['ville']; ?></td>
				<td><?php echo $livre['cp']; ?></td>
				<td><?php echo $livre['adresse']; ?></td>
				<td>					
					<a href="?page=gestionMembre&action=supprimer&membre=<?php echo $livre['id_membres']; ?>" title="Supprimer" style='color:#DE6A1C;'>
						Supprimer
					</a>					
				</td>
				<td></td>
			  </tr>
			 <?php }?>
		   </tbody>
		  </table>
		  <h5><a href="#" style='color:#DE6A1C;'>Haut de page</a></h5>
</div>
<script>
	$(function() {
    $("table#sortTableExample").tablesorter({ sortList: [[1,0]] });
  });
</script>