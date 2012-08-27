<?php
	$article = new Livres();
	
	//
	
	if(!empty($_POST))
	 {
	  
		
		$article->titre = $_POST['titre'];
		if (!empty($article->titre)) {
			$article->titre = $_POST['titre'];
		}else
		{
			echo"Champ titre vide<br />";
		}
	  $article->auteur = $_POST['auteur'];
	  if (!empty($article->auteur)) {
			$article->auteur = $_POST['auteur'];
		}else
		{
			echo"Champ auteur vide<br />";
		}
	 $article->id_auteur = $_POST['id_auteur'];
	  if (!empty($article->id_auteur)) {
			$article->id_auteur = $_POST['id_auteur'];
		}else
		{
			echo"Champ id_auteur vide<br />";
		}
	  $article->date_parution = $_POST['date_parution'];
	  if (!empty($article->date_parution)) {
			$article->date_parution = $_POST['date_parution'];
		}else
		{
			echo"Champ date_parution vide<br />";
		}
	  $article->edition = $_POST['edition'];
	  if (!empty($article->edition)) {
			$article->edition = $_POST['edition'];
		}else
		{
			echo"Champ edition vide<br />";
		}
	  $article->id_edition = $_POST['id_edition'];
	  if (!empty($article->id_edition)) {
			$article->id_edition = $_POST['id_edition'];
		}else
		{
			echo"Champ id_edition vide<br />";
		}
	  $article->description = $_POST['description'];
	  if (!empty($article->description)) {
			$article->description = $_POST['description'];
		}else
		{
			echo"Champ description vide<br />";
		}
	  $article->categorie = $_POST['categorie'];
	  if (!empty($article->categorie)) {
			$article->categorie = $_POST['categorie'];
		}else
		{
			echo"Champ categorie vide<br />";
		}
	  $article->id_categorie = $_POST['id_categorie'];
	  if (!empty($article->id_categorie)) {
			$article->id_categorie = $_POST['id_categorie'];
		}else
		{
			echo"Champ id_categorie vide<br />";
		}
	  $article->prix = $_POST['prix'];
	  if (!empty($article->prix)) {
			$article->prix = $_POST['prix'];
		}else
		{
			echo"Champ prix vide<br />";
		}
	  $article->photo = $_POST['photo'];
	  if (!empty($article->photo)) {
			$article->photo = $_POST['photo'];
		}else
		{
			echo"Champ photo vide<br />";
		}
	  $article->qte = $_POST['qte'];
	  if (!empty($article->qte)) {
			$article->qte = $_POST['qte'];
		}else
		{
			echo"Champ qte vide <br />";
		}
	
	 if(!empty($article->titre) && !empty($article->qte) && !empty($article->description)){
	 
	  $article->save();
	  echo "<div class='alert-message success'>
	        <h4>Livre ajouté !!</h4>
	        <a href='?page=gestionLivre' title='Gestion des Livres'>Retour</a>
	      </div>";exit;
	  }
	  
	 }else{
	 
		echo "<h2>Vous devez remplir tous les champs du formulaire</h2>";
	 }

 /* Nous appellerons ici la page HTML appropri? */
	include(HTML_DIR.'admin/ajoutLivre.php');
?>