<div class='container' style='padding-top:60px;'>
	<h2 style="color:#DE6A1C">Modification</h2>
	<br />
	<form method="post" action="?page=gestionAut&action=modifier&aut=<?php echo $article['id_auteur'];?>" enctype="application/x-www-form-urlencoded" name="modification"  onSubmit="return check3();"/>

		<div class="clearfix">
			<label for="id_auteur"><b style="color:#DE6A1C"></b>Id Auteur</label>
			<div class="input">
			  <input class="xlarge" id="id_auteur" name="id_auteur" size="30" type="text" value="<?php if(isset($article['id_auteur'])) echo htmlentities(trim($article['id_auteur'])); ?>">
			</div>
		</div>

		<div class="clearfix">
			<label for="nom"><b style="color:#DE6A1C"></b>Auteur</label>
			<div class="input">
			  <input class="xlarge" id="nom" name="nom" size="30" type="text" value="<?php if(isset($article['nom'])) echo htmlentities(trim($article['nom'])); ?>">
			</div>
		</div>
		
		<div class="actions">
			<input type="submit" class="btn primary" name="modifier" value="Modifier" style="background:#DE6A1C;color:black">
		</div>

	</form>
</div>