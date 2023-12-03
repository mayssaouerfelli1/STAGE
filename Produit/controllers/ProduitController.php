<?php
include_once('../models/cantinage.php') ;
include_once('../database/config.php');
class ProduitController extends Connexion{
function __construct() {
parent::__construct();
}

function getProduit($idp){
    $query="select * FROM produit WHERE $CodeP = ? ";
    $res = $this->pdo->prepare($query);
    $res->execute(array($idp));
    $array= $res->fetch();
    return $array;
	
	
	if ($array == true ) {
		echo"<input type='text' VALUE='prod' style='background-color:green'>";
} else {
        echo"<input type='text' VALUE='prod' style='background-color:red'>";
} 
}

function insert(cantinage $c)
{
$query="insert into cantinage(CodeP,Quantite)values(?, ?)";
$res=$this->pdo->prepare($query);


$aryy = array($c->getCodeP(),$e->getQuantite()) ;

return $res->execute($aryy);
}
}

?> 


	