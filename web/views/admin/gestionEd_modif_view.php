<div class='container' style='padding-top:60px;'>
	<h2 style="color:#DE6A1C">Modification</h2>
	<br />
	<form method="post" action="?page=gestionEd&action=modifier&ed=<?php echo $article['id_edition'];?>" enctype="application/x-www-form-urlencoded" name="modification"  onSubmit="return check3();"/>

		<div class="clearfix">
			<label for="id_edition"><b style="color:#DE6A1C"></b>Id Edition</label>
			<div class="input">
			  <input class="xlarge" id="id_edition" name="id_edition" size="30" type="text" value="<?php if(isset($article['id_edition'])) echo htmlentities(trim($article['id_edition'])); ?>">
			</div>
		</div>

		<div class="clearfix">
			<label for="nom"><b style="color:#DE6A1C"></b>Categorie</label>
			<div class="input">
			  <input class="xlarge" id="nom" name="nom" size="30" type="text" value="<?php if(isset($article['nom'])) echo htmlentities(trim($article['nom'])); ?>">
			</div>
		</div>
		
		<div class="actions">
			<input type="submit" class="btn primary" name="modifier" value="Modifier" style="background:#DE6A1C;color:black">
		</div>

	</form>
</div>