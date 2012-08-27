<?php

class Panier{

//panier
var $panier;

//constructeur
function panier(){

	$panier = array();
}


//ajoute un article
//un article est définit par ses clé (code) et ses valeurs
// array('code'=>'isbn-4587','nom'=>'clavier','prix'=>15,'quantite'=>56) par exemple
function addArticle($array){

	$this->panier[] = $array;

}

//supprime un article
function deleteArticle($idArticle){

	unset($this->panier[$idArticle]);

}

//modifie un article en fonction de son id et de la clé
function modifyArticle($idArticle,$code,$value){

	$this->panier[$idArticle][$code] = $value;

}

//ajoute un code suplémentaire à un article
function pushCodeArticle($idArticle,$code,$value){

	$this->panier[$idArticle][$code] = $value;
	
}

//supprime un code d'un article
function deleteCodeArticle($idArticle,$code){

	unset($this->panier[$idArticle][$code]);
}

//vide le panier
function deleteBasket(){

	$this->panier = array();
	
}


//retourne le nombre d'article
function getNbrArticle(){

	return count($this->panier);

}


//retourne le tableau de l'article lié à l id
function getInfoArticle($idArticle){

	return $this->panier[$idArticle];

}

//retourne le tableau d'article
function getpanier(){

	return $this->panier;

}



}//fin class






?>
