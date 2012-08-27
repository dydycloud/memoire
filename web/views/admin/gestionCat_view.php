<div class='container' style='padding-top:60px;'>

  <h3><a href="?page=ajoutCat" style='background:#DE6A1C;text-align:center;'>Ajouter une categorie</a></h3>

<h2 style='text-align:center;'>Liste des categories</h2>
<br />
<table class="zebra-striped" id="sortTableExample">
        <thead>
          <tr>
            <th class="yellow header"></th>
            <th class="blue header headerSortDown">ID</h5></th>      
            <th class="green header">Categorie</th>           
            <th class="red header">Actions</th>
            <th class="yellow header"></th>
          </tr>
        </thead>
        <tbody>
         <?php foreach($livres->toArray() as $livre){ ?>
         <tr>
            <td></td>
            <td><?php echo $livre['id_categorie']; ?></td>
            
            <td><?php echo $livre['nom']; ?></td>
            
            <td>
	            <p>
		            <a href="?page=gestionCat&action=modifier&cat=<?php echo $livre['id_categorie']; ?>" title="Modifier" style='color:#DE6A1C;'>
		            	Modifier
		            </a> 
		            <a href="?page=gestionCat&action=supprimer&cat=<?php echo $livre['id_categorie']; ?>" title="Supprimer" style='color:#DE6A1C;'>
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