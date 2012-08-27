<div class='container' style='padding-top:60px;'>
	<div class="row show-grid" title="Inscription & Connexion">
		
		<div class="span8">
			<h2> Pas encore inscrit ??</h2>

			<p><br />Cliquez sur le bouton afin de remplir le formulaire d'inscription<br /><br /></p>

			<h2><a href="?page=inscription" title="Inscription" style="background:#DE6A1C;color:black">Inscription</a></h2>

		</div>

		<div class="span8">
			
			<h2> Déjà inscrit </h2>
			
			<form method="post" action="?page=connex" enctype="application/x-www-form-urlencoded" name="connexion"  onSubmit="return checkconnex();">
				
				<div class="clearfix">
					<label for="pseudo">Pseudo</label>&nbsp;
					<div class="input">
					  <input class="xlarge" id="pseudo" name="pseudo" size="30" type="text" value="<?php if(isset($_POST['pseudo'])) echo htmlentities(trim($_POST['pseudo'])); ?>">
					</div>
				</div>
				
				<div class="clearfix">
					<label for="mdp">Mdp</label>&nbsp;
					<div class="input">
					  <input class="xlarge" id="mdp" name="mdp" size="30" type="text" value="<?php if(isset($_POST['mdp'])) echo htmlentities(trim($_POST['mdp'])); ?>">
					</div>
				</div>
				
				<div class="actions">
					<input type="submit" class="btn primary" name="connexion" value="Connexion" style="background:#DE6A1C;color:black">
				</div>

			</form>

			<h4><a href="?page=mdp"> Vous avez oubliez votre mot de passe !!!</a> </h4>

		</div>
		
	</div>
</div>
