<?php

class cantinage {
private $CodeP,$Quantite;
function __construct($CodeP="",$Quantite="") {
	
    $this->CodeP=$CodeP;
    $this->Quantite=$Quantite;
}

public function getCodeP(){
	return $this->CodeP;
}

public function getQuantite(){
	return $this->Quantite;
}

public function setCodeP($CodeP){
        $this->CodeP = $CodeP;
    }

public function setQuantite($Quantite){
        $this->Quantite = $Quantite;
    }
}