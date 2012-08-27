<div class='container' style='padding-top:60px;'>
	<h1 style='text-align:center;'>Panier</h1>
	<h2 style='color:#DE6A1C;'><?php echo $mess ;?></h2>
	 <form method="post" action="?page=inscription" enctype="application/x-www-form-urlencoded" name="inscription"  onSubmit="return check();"/>
	<table class="zebra-striped" id="sortTableExample">
        <thead>
          <tr>
            <th class="yellow header" style='color:#DE6A1C;'>Article </th>
            <th class="yellow header"></th>
            <th class="yellow header headerSortDown"><h5 style='color:#DE6A1C;'>ID</h5></th>
            <th class="yellow header"><h5 style='color:#DE6A1C;'>Titre</h5></th>
            <th class="yellow header"><h5 style='color:#DE6A1C;'>Quantité</h5></th>
            <th class="yellow header"><h5 style='color:#DE6A1C;'>Prix</h5></th>
            <th class="yellow header"><h5 style='color:#DE6A1C;'>Supprimer</h5></th>
            <th class="yellow header"></th>

          </tr>
        </thead>
        <tbody>
        
         <?php foreach($pan as $livre){ ?>
         <tr>
        
            <td><?php echo $count; ?></td>
            <td><h5><img src="<?php echo $livre['photo'];?>" height='80' width='80' title="<?php echo $livre['titre'] ;?>"/></h5></td>
            <td><h5><?php echo $livre['id_livre']; ?></h5></td>
            <input class="xlarge" id="id_livre" name="id_livre" size="30" type="hidden" value="<?php if(isset($livre['id_livre'])) echo htmlentities(trim($livre['id_livre'])); ?>">
            <td><h5><?php echo $livre['titre']; ?></h5></td>
            <td><h5><?php echo $livre['quantite']; ?></h5></td>
            <td><h5><?php echo $livre['prix'] * $livre['quantite']; ?></h5></td>
            
            <td>
	            <h5>
		            <a href="?page=panier&action=supprimer&livre=<?php echo $count; ?>" title="Supprimer" style='color:#DE6A1C;'>
		            	X
		            </a>
	            </h5>
            </td>
            <td></td>
      
          </tr>

         <?php 
         $count++;
         $som += $livre['prix']*$livre['quantite'];
         }?>

        <tr>
	         <td><h3><a href='?page=panier&action=vider' style='color:red;'>Vider le panier<a></h3></td>
	         <td><h3 style='color:#DE6A1C;'>Totale : </h3></td><td><h2 style='color:#DE6A1C;'><?php echo $som; ?> euros </h2></td>
        </tr>

       </tbody>

      </table>
      <h3><a href='?page=panier&action=valider' style='color:red;'>Valider<a></h3>
  </form>
      <h5><a href="#" style='color:#DE6A1C;'>Haut de page</a></h5>
</div>
<script>
	$(function() {
    $("table#sortTableExample").tablesorter({ sortList: [[1,0]] });
  });
</script>