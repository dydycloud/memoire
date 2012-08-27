<?php
ob_start();
require_once(dirname(__FILE__).'/../config/global.php');
session_start();
include('views/template/haut.php');

/* Nous ferons ici les traitements concernant la page. */

if(isset($_SESSION['membre']) && $_SESSION['membre']['statut'] == 0)
{
	if(isset($_GET['page']))
	{	
		switch ($_GET['page'])
		{
			case 'index':
				include_once("controller/index_controller.php");
			break;

			case 'paiement':
				include_once("controller/membres/paiement.controller.php");
			break;

			case 'deconnexion':
				include_once("controller/deconnexion.controllers.php");
			break;

			case 'profil':
				include_once("controller/membres/profil_controller.php");
			break;

			case 'panier':		
				include_once("controller/membres/panier_controller.php");
			break;

			case 'detailArt':
				include_once("controller/detailart.controller.php");
			break;
			
			case 'leslivres':
				include_once("controller/livre_controller.php");
			break;
			
			case 'recherche':
				include_once("controller/recherche_controller.php");
			break;

			case 'inscription':
				include_once("controller/membres/inscription_controller.php");
			break;
			
			case 'connex':
				include_once("controller/membres/connexion_controller.php");
			break;

			case 'mention':
				include_once("controller/mentionLeg_controller.php");
			break;

			case 'cgv':
				include_once("controller/cgv_controller.php");
			break;

			case 'plan':
				include_once("controller/plan_controller.php");
			break;

			case 'contact':
				include_once("controller/contact_controller.php");
			break;
			
			default:
			include('views/template/access.php');
		
			
		}
	}
	
}

elseif(isset($_SESSION['membre']) && $_SESSION['membre']['statut'] == 1)
{
	if(isset($_GET['page']))
	{
		switch ($_GET['page'])
		{
			
		

		/*--------------------------------admin---------------------------------------*/

		case 'gestionLivre':
			include_once("controller/admin/gestionLivre_controller.php");
		break;

		case 'gestionCommande':
			include_once("controller/admin/gestionCommande_controller.php");
		break;

		case 'ajoutArticle':
			include_once("controller/admin/ajoutLivre_controller.php");
		break;
		
		case 'ajoutAut':
			include_once("controller/admin/ajoutAut_controller.php");
		break;
		
		case 'ajoutCat':
			include_once("controller/admin/ajoutCat_controller.php");
		break;
		
		case 'ajoutEd':
			include_once("controller/admin/ajoutEd_controller.php");
		break;

		case 'gestionMembre':
			include_once("controller/admin/gestionMembre_controller.php");
		break;
		
		case 'gestionCat':
			include_once("controller/admin/gestionCat_controller.php");
		break;
		
		case 'gestionAut':
			include_once("controller/admin/gestionAut_controller.php");
		break;
		
		case 'gestionEd':
			include_once("controller/admin/gestionEd_controller.php");
		break;

		case 'deconnexion':
				include_once("controller/deconnexion.controllers.php");
			break;
		
		
			default:
			include('views/template/access.php');
		
		
		}
	}
}


if(isset($_GET['page']))
{	
	switch ($_GET['page'])
	{
		case 'index':
			include_once("controller/index_controller.php");
		break;
		
		case 'detailArt':
			include_once("controller/detailart.controller.php");
		break;
		
		case 'leslivres':
			include_once("controller/livre_controller.php");
		break;
		
		case 'recherche':
			include_once("controller/recherche_controller.php");
		break;

		case 'inscription':
			include_once("controller/membres/inscription_controller.php");
		break;
		
		case 'connex':
			include_once("controller/membres/connexion_controller.php");
		break;

		case 'mdp':
			include_once("controller/mdp_controllers.php");
		break;

		case 'mention':
			include_once("controller/mentionLeg_controller.php");
		break;

		case 'cgv':
			include_once("controller/cgv_controller.php");
		break;

		case 'plan':
			include_once("controller/plan_controller.php");
		break;

		case 'contact':
			include_once("controller/contact_controller.php");
		break;

		case 'paiement':
			if(isset($_SESSION['membre'])){	echo " ";}else{echo "<div class='alert-message error'>
	   <a class='close' href='index.php'>×</a>
        <h4><strong>Vous n'êtes pas autorisez à consulter cette page.</strong> Retour vers l'acceuil <a href='index.php'>ici</a>.</h4>
      </div>";}
		break;

		case 'deconnexion':
			if(isset($_SESSION['membre'])){	echo " ";}else{echo "<div class='alert-message error'>
        <a class='close' href='index.php'>×</a>
        <h4><strong>Vous n'êtes pas autorisez à consulter cette page.</strong> Retour vers l'acceuil <a href='index.php'>ici</a>.</h4>
      </div>";}
		break;

		case 'profil':
			if(isset($_SESSION['membre'])){	echo " ";}else{echo "<div class='alert-message error'>
        <a class='close' href='index.php'>×</a>
        <h4><strong>Vous n'êtes pas autorisez à consulter cette page.</strong> Retour vers l'acceuil <a href='index.php'>ici</a>.</h4>
      </div>";}
		break;

		case 'panier':		
			if(isset($_SESSION['membre'])){	echo " ";}else{echo "<div class='alert-message error'>
        <a class='close' href='index.php'>×</a>
        <h4><strong>Vous n'êtes pas autorisez à consulter cette page.</strong> Retour vers l'acceuil <a href='index.php'>ici</a>.</h4>
      </div>";}
		break;

		case 'gestionLivre':
			if(isset($_SESSION['membre'])){	echo " ";}else{echo "<div class='alert-message error'>
        <a class='close' href='index.php'>×</a>
        <h4><strong>Vous n'êtes pas autorisez à consulter cette page.</strong> Retour vers l'acceuil <a href='index.php'>ici</a>.</h4>
      </div>";}
		break;

		case 'ajoutArticle':
			if(isset($_SESSION['membre'])){	echo " ";}else{echo "<div class='alert-message error'>
        <a class='close' href='index.php'>×</a>
        <h4><strong>Vous n'êtes pas autorisez à consulter cette page.</strong> Retour vers l'acceuil <a href='index.php'>ici</a>.</h4>
      </div>";}
		break;
		
		case 'ajoutAut':
			if(isset($_SESSION['membre'])){	echo " ";}else{echo "<div class='alert-message error'>
        <a class='close' href='index.php'>×</a>
        <h4><strong>Vous n'êtes pas autorisez à consulter cette page.</strong> Retour vers l'acceuil <a href='index.php'>ici</a>.</h4>
      </div>";}
		break;
		
		case 'ajoutCat':
			if(isset($_SESSION['membre'])){	echo " ";}else{echo "<div class='alert-message error'>
        <a class='close' href='index.php'>×</a>
        <h4><strong>Vous n'êtes pas autorisez à consulter cette page.</strong> Retour vers l'acceuil <a href='index.php'>ici</a>.</h4>
      </div>";}
		break;

		case 'gestionMembre':
			if(isset($_SESSION['membre'])){	echo " ";}else{echo "<div class='alert-message error'>
        <a class='close' href='index.php'>×</a>
        <h4><strong>Vous n'êtes pas autorisez à consulter cette page.</strong> Retour vers l'acceuil <a href='index.php'>ici</a>.</h4>
      </div>";}
		break;

		case 'gestionCommande':
			if(isset($_SESSION['membre'])){	echo " ";}else{echo "<div class='alert-message error'>
        <a class='close' href='index.php'>×</a>
        <h4><strong>Vous n'êtes pas autorisez à consulter cette page.</strong> Retour vers l'acceuil <a href='index.php'>ici</a>.</h4>
      </div>";}
		break;
		
		case 'gestionAut':
			if(isset($_SESSION['membre'])){	echo " ";}else{echo "<div class='alert-message error'>
        <a class='close' href='index.php'>×</a>
        <h4><strong>Vous n'êtes pas autorisez à consulter cette page.</strong> Retour vers l'acceuil <a href='index.php'>ici</a>.</h4>
      </div>";}
		break;
		
		case 'gestionCat':
			if(isset($_SESSION['membre'])){	echo " ";}else{echo "<div class='alert-message error'>
        <a class='close' href='index.php'>×</a>
        <h4><strong>Vous n'êtes pas autorisez à consulter cette page.</strong> Retour vers l'acceuil <a href='index.php'>ici</a>.</h4>
      </div>";}
		break;


	}
}
else
{
	include_once("controller/index_controller.php");
}



ob_end_flush();