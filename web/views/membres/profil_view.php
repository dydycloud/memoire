<div class='container' style='padding-top:60px;'>
	<div class="row show-grid" title="Default three column layout">
		
		<div class="span-one-third">
			<h2>Bienvenu <?php echo $_SESSION['membre']->pseudo;?></h2>
			<p><br /></p>
			<p><b style="color:#DE6A1C">Votre mot de passe : </b><?php echo $_SESSION['membre']->mdp;?></p>
			<p><b style="color:#DE6A1C">Nom : </b><?php echo $_SESSION['membre']->nom;?></p>
			<p><b style="color:#DE6A1C">Prenom : </b><?php echo $_SESSION['membre']->prenom;?></p>
			<p><b style="color:#DE6A1C">Email : </b><?php echo $_SESSION['membre']->email;?></p>
		</div>
		
		<div class="span-one-third">
			<h2>Adresse de facturation </h2>
			<p><br /></p>
			<p><b style="color:#DE6A1C">Adresse : </b><?php echo $_SESSION['membre']->adresse;?></p>
			<p><b style="color:#DE6A1C">Cp / Ville : </b><?php echo $_SESSION['membre']->cp;?> <?php echo $_SESSION['membre']->ville;?></p>

		</div>
		
		<div class="span-one-third">
			<h2>Boîte à outils </h2>
			<p><br /></p>
			<p>
				<a href="?page=profil&action=commande&id=<?php echo $_SESSION['membre']->id_membres;?>" titre="Voir mes commandes">
					Voir mes commandes
				</a>
			</p>
			<p>
				<a href="?page=profil&action=modifier&id=<?php echo $_SESSION['membre']->id_membres;?>" titre="Modifier mon profil">
					Modifier mon profil
				</a>
			</p>
		</div>
	</div>
</div>

