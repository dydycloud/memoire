<!DOCTYPE html>

<html lang="fr">
<head>
	<meta charset="UTF-8">

	<title>LIRE POUR ÊTRE</title>

	<link rel="stylesheet" media="screen" href="css/style.css">
  <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script type="text/javascript" src="js/tableSorter.js"></script>
  <script type="text/javascript" src="js/controlForm.js"></script>
</head>
<body>
	 <div class="topbar" style="position:static"> 
          <div class="topbar-inner"> 
            <div class="container"> 
              <!-- <h3><a href="index.php" style="color:#DE6A1C;"><b>Lire pour Être</b></a></h3>  -->
                <ul class="nav"> 
                <?php if(!isset($_SESSION['membre']->statut) == 1): ?>
                      <li><a href="?page=index" title="Accueil"><b>Accueil</b></a></li>
                      <li><a href="?page=leslivres" title="Les livres">Les livres</a></li>
                      <li><a href="?page=recherche" title="Recherche">Recherche</a></li>
                <?php endif;?>

                <?php if(!isset($_SESSION['membre'])): ?>
                      <li><a href="?page=connex" title="Inscription / Connexion">Inscription / Connexion</a></li>
                <?php endif;?>
                  
                <?php
                if(isset($_SESSION['membre']) && $_SESSION['membre']->statut == 0)
                {?>
                      <li><a href="?page=index" title="Accueil"><b>Accueil</b></a></li>
                      <li><a href="?page=leslivres" title="Les livres">Les livres</a></li>
                      <li><a href="?page=recherche" title="Recherche">Recherche</a></li>
                      <li><a href="?page=profil" title="Profil">Profil</a></li>
                      <li><a href="?page=panier" title="Panier">Panier</a></li>
                      <li><a href="?page=deconnexion" title="Deconnexion">Deconnexion</a></li>
                      <li><a href="?page=mention" title="mentions légales">Mentions Légales</a></li> 
                      <li><a href="?page=cgv" title="conditions générales de vente">C.G.V</a></li> 
                      <li><a href="?page=plan" title="plan du site">Plan du site</a></li> 
                      <li><a href="?page=contact" title="contact">Contact</a></li>
                <?php }?>

                <?php if(!isset($_SESSION['membre']->statut) == 1): ?>
                      <li><a href="?page=mention" title="mentions légales">Mentions Légales</a></li> 
                      <li><a href="?page=cgv" title="conditions générales de vente">C.G.V</a></li> 
                      <li><a href="?page=plan" title="plan du site">Plan du site</a></li> 
                      <li><a href="?page=contact" title="contact">Contact</a></li>
                <?php endif;?>

                <?php if(isset($_SESSION['membre']) && $_SESSION['membre']->statut == 1): ?>
                      <li><a href="?page=gestionLivre" title="Administration"><b>Administration</b></a></li>
                      <li><a href="?page=gestionLivre" title="Gestion des livres">Les livres</a></li>
					  <li><a href="?page=gestionAut" title="Gestion des auteurs">Les Auteurs</a></li>
					  <li><a href="?page=gestionCat" title="Gestion des categories">Les categories</a></li>
					  <li><a href="?page=gestionEd" title="Gestion des Editions">Les Editions</a></li>
                      <li><a href="?page=gestionMembre" title="Gestion des Membres">Les Membres</a></li>
                      <li><a href="?page=gestionCommande" title="Gestion des Commandes">Les Commandes</a></li>
                      <li><a href="?page=deconnexion" title="Deconnexion">Deconnexion</a></li>
                <?php endif;?> 
                                 
                </ul>
            </div> 
          </div> 
        </div> 
 
        