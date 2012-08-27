<div class='container' style='padding-top:60px;'>

  <h3><a href="?page=ajoutArticle" style='background:#DE6A1C;text-align:center;'>Ajouter un livre</a></h3>

<h2 style='text-align:center;'>Liste des livres</h2>
<br />
<table class="zebra-striped" id="sortTableExample">
        <thead>
          <tr>
            <th class="yellow header"></th>
            <th class="blue header headerSortDown">ID</h5></th>
            <th class="green header">Titre</th>
            <th class="green header">Auteurs</th>
            <th class="green header">Editions</th>
            <th class="green header">Catégories</th>
            <th class="green header">Prix</th>
            <th class="green header">Quantité</th>
            <th class="red header">Actions</th>
            <th class="yellow header"></th>
          </tr>
        </thead>
        <tbody>
         <?php foreach($livres->toArray() as $livre){ ?>
         <tr>
            <td><img src="<?php echo $livre['photo'];; ?>" height='150' width='150' title="<?php echo $livre['titre'];?>"/></td>
            <td><?php echo $livre['id_livre']; ?></td>
            <td><?php echo $livre['titre']; ?></td>
            <td><?php echo $livre['auteur']; ?></td>
            <td><?php echo $livre['edition']; ?></td>
            <td><?php echo $livre['categorie']; ?></td>
            <td><?php echo $livre['prix']; ?></td>
            <td><?php echo $livre['qte']; ?></td>
            <td>
	            <p>
		            <a href="?page=gestionLivre&action=modifier&livre=<?php echo $livre['id_livre']; ?>" title="Modifier" style='color:#DE6A1C;'>
		            	Modifier
		            </a> 
		            <a href="?page=gestionLivre&action=supprimer&livre=<?php echo $livre['id_livre']; ?>" title="Supprimer" style='color:#DE6A1C;'>
		            	Supprimer
		            </a>
	            </p>
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