<?php

class ClientReservation {

  protected $nb_place;
  protected $code_reduction;
  protected $paiement;

  public function __construct(array $donnees){
    $this->hydrate($donnees);
  }

  public function hydrate(array $donnees){
    foreach($donnees as $key => $value){
      $method = 'set'.ucfirst($key);

      if(method_exists($this, $method)){
        $this->$method($value);
      }
    }
  }


  public function getNbPlace() {return $this->nb_place;}
  public function getCodeReduction() {return $this->code_reduction;}
  public function getPaiement() {return $this->paiement;}

  public function setNbPlace($nb_place){
    if($nb_place > 0 && $nb_place < 11){
      trigger_error('Le nombre de place que choisit le client doit être un entier', E_USER_WARNING);
      return;
    }
    $this->nb_place = $nb_place;
  }

  public function setCodeReduction($code_reduction){
    if($code_reduction > 0 && $code_reduction < 300){
      trigger_error('Le code de réduction du client doit être un nombre entier', E_USER_WARNING);
      return;
    }
    $this->code_reduction = $code_reduction;
  }

  public function setPaiement($paiement){
    if($paiement > 0 && $paiement < 300){
      trigger_error('Le paiement doit être un entier', E_USER_WARNING);
      return;
    }
    $this->paiement = $paiement;
  }
}


 ?>
