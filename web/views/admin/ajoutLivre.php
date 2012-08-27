<div class='container' style='padding-top:60px;'>
	<h2 style="color:#DE6A1C">Ajouter un livre </h2>
	<form method="post" action="?page=ajoutArticle" enctype="application/x-www-form-urlencoded" name="modification"  onSubmit="return check3();"/>
		
		<div class="clearfix">
			<div class="input">
			  <input class="xlarge" id="pseudo" name="pseudo" size="30" type="hidden" value="<?php if(isset($_POST['id_livre'])) echo htmlentities(trim($_POST['id_livre'])); ?>">
			</div>
		</div>

		<div class="clearfix">
			<label for="titre"><b style="color:#DE6A1C"></b>Titre</label>
			<div class="input">
			  <input class="xlarge" id="titre" name="titre" size="30" type="text" value="<?php if(isset($_POST['titre'])) echo htmlentities(trim($_POST['titre'])); ?>">
			</div>
		</div>

		<div class="clearfix">
			<label for="auteur"><b style="color:#DE6A1C"></b>Auteur</label>
			<div class="input">
			  <input class="xlarge" id="auteur" name="auteur" size="30" type="text" value="<?php if(isset($_POST['auteur'])) echo htmlentities(trim($_POST['auteur'])); ?>">
			</div>
		</div>

		<div class="clearfix">
			<label for="id_auteur"><b style="color:#DE6A1C"></b>Id Auteur</label>
			<div class="input">
			  <input class="xlarge" id="id_auteur" name="id_auteur" size="30" type="text" value="<?php if(isset($_POST['id_auteur'])) echo htmlentities(trim($_POST['id_auteur'])); ?>">
			</div>
		</div>

		<div class="clearfix">
			<label for="date_parution"><b style="color:#DE6A1C"></b>Date de parution</label>
			<div class="input">
			  <input class="xlarge" id="date_parution" name="date_parution" size="30" type="text" value="<?php if(isset($_POST['date_parution'])) echo htmlentities(trim($_POST['date_parution'])); ?>">
			</div>
		</div>

		<div class="clearfix">
			<label for="edition"><b style="color:#DE6A1C"></b>Edition</label>
			<div class="input">
			  <input class="xlarge" id="edition" name="edition" size="30" type="text" value="<?php if(isset($_POST['edition'])) echo htmlentities(trim($_POST['edition'])); ?>">
			</div>
		</div>

		<div class="clearfix">
			<label for="id_edition"><b style="color:#DE6A1C"></b> Id Edition</label>
			<div class="input">
			  <input class="xlarge" id="id_edition" name="id_edition" size="30" type="text" value="<?php if(isset($_POST['id_edition'])) echo htmlentities(trim($_POST['id_edition'])); ?>">
			</div>
		</div>

		<div class="clearfix">
			<label for="description"><b style="color:#DE6A1C">*</b>Description</label>
			<div class="input">
			  <textarea class="xxlarge" id="description" name="description" rows="10"><?php if(isset($_POST['description'])) echo htmlentities(trim($_POST['description'])); ?></textarea>
			  <span class="help-block" style="color:red">
				**Pitch de l'ouvrage.**
			  </span>
			</div>
		</div>
		
		<div class="clearfix">
			<label for="categorie"><b style="color:#DE6A1C"></b>Categorie</label>
			<div class="input">
			  <input class="xlarge" id="categorie" name="categorie" size="30" type="text" value="<?php if(isset($_POST['categorie'])) echo htmlentities(trim($_POST['categorie'])); ?>">
			</div>
		</div>

		<div class="clearfix">
			<label for="id_categorie"><b style="color:#DE6A1C"></b>Id categorie</label>
			<div class="input">
			  <input class="xlarge" id="id_categorie" name="id_categorie" size="30" type="text" value="<?php if(isset($_POST['id_categorie'])) echo htmlentities(trim($_POST['id_categorie'])); ?>">
			</div>
		</div>

		<div class="clearfix">
			<label for="prix"><b style="color:#DE6A1C"></b>Prix</label>
			<div class="input">
			  <input class="xlarge" id="prix" name="prix" size="30" type="text" value="<?php if(isset($_POST['prix'])) echo htmlentities(trim($_POST['prix'])); ?>">
			</div>
		</div>

		<div class="clearfix">
			<label for="prix"><b style="color:#DE6A1C"></b>Photo</label>
			<div class="input">
			  <input class="xlarge" id="photo" name="photo" size="30" type="text" value="<?php if(isset($_POST['photo'])) echo htmlentities(trim($_POST['photo'])); ?>">
			</div>
		</div>
		<div class="clearfix">
			<label for="qte"><b style="color:#DE6A1C"></b>Qte</label>
			<div class="input">
			  <input class="xlarge" id="qte" name="qte" size="30" type="text" value="<?php if(isset($_POST['qte'])) echo htmlentities(trim($_POST['qte'])); ?>">
			</div>
		</div>

		<div class="actions">
			<input type="submit" class="btn primary" name="ajouter" value="Ajouter" style="background:#DE6A1C;color:black">
		</div>

	</form>
</div>