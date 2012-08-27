<div class='container' style='padding-top:60px;'>
	<h2 style="text-align:center">Recaputulatif de votre commande <?php echo $_SESSION['commande']['pseudo'];?></h2>
	<p><br /></p>
	<p><br /></p>
	<div class="row show-grid" title="Half and half">
		<div class="span8">
			<h5>Commande n° : " <?php echo $_SESSION['commande']['detailcom'];?> "</h5>
			<p><br /></p>
			<h4>Votre Adresse de livraison</h4>
			<p><br /></p>
			<h5><?php echo $_SESSION['membre']['adresse'];?></h5>
			<h5><?php echo $_SESSION['membre']['cp'];?> <?php echo $_SESSION['membre']['ville'];?></h5>
			
		</div>
		<div class="span8">
		<table>
			  <tr>
				<th><code>Titre</code></th>
				<?php echo $_SESSION['commande']['titre'];?>
			  </tr>
			  <tr>
			  <th><code>Id article</code></th>
				<?php echo $_SESSION['commande']['article'];?>
			  </tr>

			  <tr>
			  <th>Quantite</th>
				<?php echo $_SESSION['commande']['quantite'];?>
			  </tr>

			  <tr>
			  <th>Prix</th>
				<?php echo $_SESSION['commande']['prix'];?>
			  </tr>
		</table>

		<h3>Montant de la commande : <?php echo $_SESSION['commande']['montant'];?> Euros</h3>

		<h4>A régler à l'adresse suivante :</h4>
		
		<h5>15 allée des Roses Pourpres</h5>
		<h5>75000 PARIS</h5>
		<p><br /></p>
		<p><A HREF="?page=profil">Terminer</A></p>
	<noscript>
	<div class="alert-message error">
			<p>Attention le javascript de votre navigateur n'est pas activé !! </p><p>Afin d'imprimer ce document maintenez enfoncé les touches "Ctrl + p"</p>
		  </div>
	</noscript>

		</div>
	</div>

<!-- DEBUT DU SCRIPT -->
<SCRIPT LANGUAGE="JavaScript">
/*
SCRIPT EDITE SUR L'EDITEUR JAVASCRIPT
http://www.editeurjavascript.com
*/
if(window.print)
	{
	document.write('<A HREF="javascript:window.print()">Imprimer cette page</A></div>');
	}
</SCRIPT>
<!-- FIN DU SCRIPT -->