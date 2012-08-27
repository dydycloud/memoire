<div class='container' style='padding-top:60px;'>
	<div class='row show-grid' title='Half and half'>
		<h5 style="color:red">* champs obligatoires</h5>
		<form method="post" action="?page=mdp" enctype="application/x-www-form-urlencoded" name="inscription"  onSubmit="return check();">
			
			<div class="clearfix">
				<label for="email"><b style="color:red">*</b>Email</label>
				<div class="input">
				  <input class="xlarge" id="email" name="email" size="30" type="text" value="<?php if(isset($_POST['email'])) echo htmlentities(trim($_POST['email'])); ?>">
				</div>
			</div>

			<div class="actions">
				<input type="submit" class="btn primary" name="envoyer" value="Envoyer" style="background:#DE6A1C;color:black">
			</div>
			
		</form>
	</div>
</div>