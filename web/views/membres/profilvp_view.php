<div class='container' style='padding-top:60px;'>
	<h2>Details commande n° <?php echo $_GET['id']; ?></h2>
	<p><br /></p>
	<table>
		  <tr>
			<th><code>Titre</code></th>
			<?php foreach($articles as $com){?>
			<?php echo $com['titre']; ?>
			<?php } ?>
		  </tr>
		  <tr>
		  <th><code>Id article</code></th>
			<?php foreach($articles as $com){?>
			<?php echo $com['article'];?>
			<?php } ?>
		  </tr>

		  <tr>
		  <th>Quantite</th>
			<?php foreach($articles as $com){?>
			<?php echo $com['quantite'];?>
			<?php } ?>
		  </tr>

		  <tr>
		  <th>Prix</th>
		   <?php foreach($articles as $com){?>
			<?php echo $com['prix'];?>
			<?php } ?>
		  </tr>
	  </table>
	<p>
	  <a href="?page=profil&action=commande&id=<?php echo $_SESSION['membre']->id_membres;?>" titre="Voir mes commandes">
	   Retour vers la liste des commandes
	  </a>
	</p>
	<SCRIPT LANGUAGE="JavaScript">
/*
SCRIPT EDITE SUR L'EDITEUR JAVASCRIPT
http://www.editeurjavascript.com
*/
if(window.print)
	{
	document.write('<A HREF="javascript:window.print()">Imprimer cette page</A>');
	}
</SCRIPT>
<!-- FIN DU SCRIPT -->
			
	<h5><a href="#" style="color:#DE6A1C;">Haut de page</a></h5></div>
</div>
<script>
    $(function() {
    $("table#sortTableExample").tablesorter({ sortList: [[1,0]] });
  });
</script>



