<div class='container' style='padding-top:60px;'>
	<h5 style="color:red">* champs obligatoires</h5>
	<form method="post" action="?page=profil&action=modifier&id=<?php echo $_SESSION['membre']->pseudo ;?>" enctype="application/x-www-form-urlencoded" name="inscription"  onSubmit="return check();"/>
		<div class="clearfix">
			<label for="pseudo"><b style="color:red">*</b>Pseudo</label>
			<div class="input">
			  <input class="xlarge" id="pseudo" name="pseudo" size="30" type="text" value="<?php if(isset($_SESSION['membre']->pseudo)) echo htmlentities(trim($_SESSION['membre']->pseudo)); ?>">
			</div>
		</div>
		<div class="clearfix">
			<label for="mdp"><b style="color:red">*</b>Mdp</label>
			<div class="input">
			  <input class="xlarge" id="mdp" name="mdp" size="30" type="text" value="<?php if(isset($_SESSION['membre']->mdp)) echo htmlentities(trim($_SESSION['membre']->mdp)); ?>">
			</div>
		</div>
		<div class="clearfix">
			<label for="nom"><b style="color:red">*</b>Nom</label>
			<div class="input">
			  <input class="xlarge" id="nom" name="nom" size="30" type="text" value="<?php if(isset($_SESSION['membre']->nom)) echo htmlentities(trim($_SESSION['membre']->nom)); ?>">
			</div>
		</div>
		<div class="clearfix">
			<label for="prenom"><b style="color:red">*</b>Prénom</label>
			<div class="input">
			  <input class="xlarge" id="prenom" name="prenom" size="30" type="text" value="<?php if(isset($_SESSION['membre']->prenom)) echo htmlentities(trim($_SESSION['membre']->prenom)); ?>">
			</div>
		</div>
		<div class="clearfix">
			<label for="email"><b style="color:red">*</b>Email</label>
			<div class="input">
			  <input class="xlarge" id="email" name="email" size="30" type="text" value="<?php if(isset($_SESSION['membre']->email)) echo htmlentities(trim($_SESSION['membre']->email)); ?>">
			</div>
		</div>
		<div class="clearfix">
			<label for="ville"><b style="color:red">*</b>Ville</label>
			<div class="input">
			  <input class="xlarge" id="ville" name="ville" size="30" type="text" value="<?php if(isset($_SESSION['membre']->ville)) echo htmlentities(trim($_SESSION['membre']->ville)); ?>">
			</div>
		</div>
		<div class="clearfix">
			<label for="cp"><b style="color:red">*</b>Cp</label>
			<div class="input">
			  <input class="xlarge" id="cp" name="cp" size="30" type="text" value="<?php if(isset($_SESSION['membre']->cp)) echo htmlentities(trim($_SESSION['membre']->cp)); ?>">
			</div>
		</div>
		<div class="clearfix">
			<label for="adresse"><b style="color:red">*</b>Adresse</label>
			<div class="input">
			  <textarea class="xxlarge" id="adresse" name="adresse" rows="4"><?php if(isset($_SESSION['membre']->adresse)) echo htmlentities(trim($_SESSION['membre']->adresse)); ?></textarea>
			  <span class="help-block" style="color:red">
				**Cette adresse sera celle utilisée pour la livraison des articles.**
			  </span>
			</div>
		</div>
		<div class="actions">
			<input type="submit" class="btn primary" name="modifier" value="Modifier" style="background:#DE6A1C;color:black">
		</div>
	</form>
</div>