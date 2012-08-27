<div class='container' style='padding-top:60px;'>
	<h2 style="color:#DE6A1C">Modification du livre => Titre : <?php echo $article['titre'];?> :: Id : <?php echo $article['id_livre'];?></h2>
	<form method="post" action="?page=gestionLivre&action=modifier&livre=<?php echo $article['id_livre'];?>" enctype="application/x-www-form-urlencoded" name="modification"  onSubmit="return check3();"/>
		
		<div class="clearfix">
			<div class="input">
			  <input class="xlarge" id="pseudo" name="pseudo" size="30" type="hidden" value="<?php if(isset($article['id_livre'])) echo htmlentities(trim($article['id_livre'])); ?>">
			</div>
		</div>

		<div class="clearfix">
			<label for="titre"><b style="color:#DE6A1C"></b>Titre</label>
			<div class="input">
			  <input class="xlarge" id="titre" name="titre" size="30" type="text" value="<?php if(isset($article['titre'])) echo htmlentities(trim($article['titre'])); ?>">
			</div>
		</div>

		<div class="clearfix">
			<label for="auteur"><b style="color:#DE6A1C"></b>Auteur</label>
			<div class="input">
			  <input class="xlarge" id="auteur" name="auteur" size="30" type="text" value="<?php if(isset($article['auteur'])) echo htmlentities(trim($article['auteur'])); ?>">
			</div>
		</div>

		<div class="clearfix">
			<label for="id_auteur"><b style="color:#DE6A1C"></b>Id Auteur</label>
			<div class="input">
			  <input class="xlarge" id="id_auteur" name="id_auteur" size="30" type="text" value="<?php if(isset($article['id_auteur'])) echo htmlentities(trim($article['id_auteur'])); ?>">
			</div>
		</div>

		<div class="clearfix">
			<label for="date_parution"><b style="color:#DE6A1C"></b>Date de parution</label>
			<div class="input">
			  <input class="xlarge" id="date_parution" name="date_parution" size="30" type="text" value="<?php if(isset($article['date_parution'])) echo htmlentities(trim($article['date_parution'])); ?>">
			</div>
		</div>

		<div class="clearfix">
			<label for="edition"><b style="color:#DE6A1C"></b>Edition</label>
			<div class="input">
			  <input class="xlarge" id="edition" name="edition" size="30" type="text" value="<?php if(isset($article['edition'])) echo htmlentities(trim($article['edition'])); ?>">
			</div>
		</div>

		<div class="clearfix">
			<label for="id_edition"><b style="color:#DE6A1C"></b> Id Edition</label>
			<div class="input">
			  <input class="xlarge" id="id_edition" name="id_edition" size="30" type="text" value="<?php if(isset($article['id_edition'])) echo htmlentities(trim($article['id_edition'])); ?>">
			</div>
		</div>

		<div class="clearfix">
			<label for="description"><b style="color:#DE6A1C">*</b>Description</label>
			<div class="input">
			  <textarea class="xxlarge" id="description" name="description" rows="10"><?php if(isset($article['description'])) echo htmlentities(trim($article['description'])); ?></textarea>
			  <span class="help-block" style="color:red">
				**Pitch de l'ouvrage.**
			  </span>
			</div>
		</div>
		
		<div class="clearfix">
			<label for="categorie"><b style="color:#DE6A1C"></b>Categorie</label>
			<div class="input">
			  <input class="xlarge" id="categorie" name="categorie" size="30" type="text" value="<?php if(isset($article['categorie'])) echo htmlentities(trim($article['categorie'])); ?>">
			</div>
		</div>

		<div class="clearfix">
			<label for="id_categorie"><b style="color:#DE6A1C"></b>Id categorie</label>
			<div class="input">
			  <input class="xlarge" id="id_categorie" name="id_categorie" size="30" type="text" value="<?php if(isset($article['id_categorie'])) echo htmlentities(trim($article['id_categorie'])); ?>">
			</div>
		</div>

		<div class="clearfix">
			<label for="prix"><b style="color:#DE6A1C"></b>Prix</label>
			<div class="input">
			  <input class="xlarge" id="prix" name="prix" size="30" type="text" value="<?php if(isset($article['prix'])) echo htmlentities(trim($article['prix'])); ?>">
			</div>
		</div>

		<div class="clearfix">
			<label for="prix"><b style="color:#DE6A1C"></b>Photo</label>
			<div class="input">
			  <input class="xlarge" id="photo" name="photo" size="30" type="text" value="<?php if(isset($article['photo'])) echo htmlentities(trim($article['photo'])); ?>">
			</div>
		</div>
		<div class="clearfix">
			<label for="qte"><b style="color:#DE6A1C"></b>Qte</label>
			<div class="input">
			  <input class="xlarge" id="qte" name="qte" size="30" type="text" value="<?php if(isset($article['qte'])) echo htmlentities(trim($article['qte'])); ?>">
			</div>
		</div>

		<div class="actions">
			<input type="submit" class="btn primary" name="modifier" value="Modifier" style="background:#DE6A1C;color:black">
		</div>

	</form>
</div>