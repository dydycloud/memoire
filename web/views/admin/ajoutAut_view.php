<div class='container' style='padding-top:60px;'>
	<h2 style="color:#DE6A1C">Ajouter un Auteur</h2>
	<br />
	<form method="post" action="?page=ajoutAut" enctype="application/x-www-form-urlencoded" name="modification"  onSubmit="return check3();"/>

		<div class="clearfix">
			<label for="nom"><b style="color:#DE6A1C"></b>Auteur</label>
			<div class="input">
			  <input class="xlarge" id="nom" name="nom" size="30" type="text" value="<?php if(isset($_POST['nom'])) echo htmlentities(trim($_POST['nom'])); ?>">
			</div>
		</div>
		
		<div class="actions">
			<input type="submit" class="btn primary" name="ajouter" value="Ajouter" style="background:#DE6A1C;color:black">
		</div>

	</form>
</div>