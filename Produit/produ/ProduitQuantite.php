<?php 
require_once('../controllers/ProduitController.php');
require_once('../models/Produit.php');

$idp=$_POST['prod'];
$qt=$_POST['quant'];


$Produitctr=new ProduitController();

$Produitctr-> getProduit($idp);

if ($idp.background-color==green) 
 {
	$cantinage=new cantinage($idp,$qt);

	$Produitctr=new ProduitController();

	$pp= $Produitctr->insert($cantinage);
		  
}
else 
 { 
    echo "produit inexistant";
 }

?>