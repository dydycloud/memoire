<div class='container' style='padding-top:60px;'>
	<h2>Contact</h2>
	<h5 style="color:red">* champs obligatoires</h5>
	<form method="post" action="?page=contact" enctype="application/x-www-form-urlencoded" name="inscription"  onSubmit="return check();" >
		<div class="clearfix">
			<label for="expediteur"><b style="color:red">*</b>Nom</label>
			<div class="input">
			  <input class="xlarge" id="expediteur" name="expediteur" size="30" type="text" value="<?php if(isset($_POST['expediteur'])) echo htmlentities(trim($_POST['expediteur'])); ?>">
			</div>
			<?php 
				if(isset($errex)){?>
					<span class="help-block" style="color:red">
				<?php echo $errex; ?>
					</span>
			<?php }?>

			
		</div>

		<div class="clearfix">
			<label for="email"><b style="color:red">*</b>Email</label>
			<div class="input">
			  <input class="xlarge" id="email" name="email" size="30" type="text" value="<?php if(isset($_POST['email'])) echo htmlentities(trim($_POST['email'])); ?>">
			</div>
			<?php 
				if(isset($errmail)){?>
					<span class="help-block" style="color:red">
				<?php echo $errmail; ?>
					</span>
			<?php }?>
		</div>

		<div class="clearfix">
			<label for="sujet"><b style="color:red">*</b>Objet</label>
			<div class="input">
			  <input class="xlarge" id="sujet" name="sujet" size="30" type="text" value="<?php if(isset($_POST['sujet'])) echo htmlentities(trim($_POST['sujet'])); ?>">
			</div>
			<?php 
				if(isset($errsujet)){?>
					<span class="help-block" style="color:red">
				<?php echo $errsujet; ?>
					</span>
			<?php }?>
		</div>


		<div class="clearfix">
			<label for="message"><b style="color:red">*</b>Message</label>
			<div class="input">
			  <textarea class="xxlarge" id="message" name="message" rows="4"><?php if(isset($_POST['message'])) echo htmlentities(trim($_POST['message'])); ?></textarea>
			</div>
			<?php 
				if(isset($errmess)){?>
					<span class="help-block" style="color:red">
				<?php echo $errmess; ?>
					</span>
			<?php }?>
		</div>
		<div class="actions">
			<input type="submit" class="btn primary" name="envoyer" value="Envoyer" style="background:#DE6A1C;color:black">
		</div>
	</form>
</div>