<?php 
/*print"<pre>";print_r($_SESSION['panier']);print"</pre>";*/
/*print"<pre>";print_r(get_class_methods($_SESSION['panier']));print"</pre>";*/


	if(isset($_GET['action']) && ($_GET['action'] == 'supprimer'))
	{
		$idArticle = $_GET['livre'];
		$_SESSION['panier']->deleteArticle($idArticle);

		header('Location: ?page=panier');
	}

	if(isset($_GET['action']) && ($_GET['action'] == 'vider'))
	{
		$idArticle = $_GET['id'];
		$_SESSION['panier']->deleteBasket();
		header('Location: ?page=panier');
	}
	if(isset($_SESSION['panier'])){
		$nb_article = $_SESSION['panier']->getNbrArticle();
		/*echo $nb_article;exit;*/


		$pan = $_SESSION['panier']->getpanier();
		/*print"<pre>";print_r($pan);print"</pre>";*/

		$count = 0;

		$som = 0;

		if($nb_article > 1){
			$mess = "il y a $nb_article  articles dans le Panier <br />";
		}else{
			$mess = "il y a $nb_article  article dans le Panier <br />";
		}
	}else{
		$nb_article = 0;
	}
	if($nb_article > 0)
	{


		/* Nous appellerons ici la page HTML appropriée. */
		include(HTML_DIR.'membres/panier_view.php');
		
		if(isset($_GET['action']) && ($_GET['action'] == 'valider'))
		{
			$com = new Commandes();
			$com->montant = $som;
			$com->pseudo = $_SESSION['membre']->id_membres;
			$com->statut = "livraison en cours";
			$com->detail_id = $_SESSION['membre']->id_membres.date("F j, Y, g:i a");
			$com->save();
			
			$detailCom = new Details_commandes();
			
			
				for($i = 0; $i <= $_SESSION['panier']->getNbrArticle(); $i++)
				{
					/*print"<pre>";print_r($pan[$i]);print"</pre>";*/
					
						$id .= "<td>".$pan[$i]['id_livre']."</td>";
						$titre .= "<td>".$pan[$i]['titre']."</td>";
						$prix .= "<td>".$pan[$i]['prix']."</td>";
						$quantite .= "<td>".$pan[$i]['quantite']."</td>";

					
				}

				
				$detailCom->article = $id;
				$detailCom->titre = $titre;
				$detailCom->prix = $prix;
				$detailCom->quantite = $quantite;
				$detailCom->id_user .= $_SESSION['membre']->id_membres;
				$detailCom->detailcom = $_SESSION['membre']->id_membres.date("F j, Y, g:i a");
				
				echo $id.$titre.$prix.$quantite.$_SESSION['membre']->id_membres.date("F j, Y, g:i a");;
				/*print"<pre>";print_r($detailCom);print"</pre>";*/
				$_SESSION['commande'] = array(
					'article'=>$id,
					'id_user'=>$_SESSION['membre']->id_membres,
					'pseudo'=>$_SESSION['membre']->pseudo,
					'detailcom'=>$_SESSION['membre']->id_membres.date("F j, Y, g:i a"),
					'titre'=>$titre,
					'prix'=>$prix,
					'montant'=>$som,
					'quantite'=>$quantite
					);
					$_SESSION['panier']->deleteBasket();
				$detailCom->save();
				header('location:?page=paiement');
				
		}


}else{
	echo "<div class='container' style='padding-top:60px;'><table class='zebra-striped 'id='sortTableExample'>
	        <thead>
	          <tr>
	            <th class='yellow header' style='color:#DE6A1C;'>Article </th>
	            <th class='yellow header'></th>
	            <th class='yellow header headerSortDown'><h5 style='color:#DE6A1C;'>ID</h5></th>
	            <th class='yellow header'><h5 style='color:#DE6A1C;'>Titre</h5></th>
	            <th class='yellow header'><h5 style='color:#DE6A1C;'>Quantité</h5></th>
	            <th class='yellow header'><h5 style='color:#DE6A1C;'>Prix</h5></th>
	            <th class='yellow header'><h5 style='color:#DE6A1C;'>Supprimer</h5></th>
	            <th class='yellow header'></th>
	
	          </tr>
	          <tr>
		         <td></td>
		         <td><h3 style='color:#DE6A1C;'>Totale : </h3></td><td></td>
        	</tr>
	        </thead>
	        <tbody>
	       </tbody>
	      </table>";

	echo "<h2 style='color:#DE6A1C;'>Votre Panier est vide </h2></div>";
	

}




?>


	