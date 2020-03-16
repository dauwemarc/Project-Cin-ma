<?php

Class MembreCinema{

  protected $id;
  protected $nom;
  protected $prenom;
  protected $email;
  protected $mdp;


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

  public function getId() {return $this->id;}
  public function getNom() {return $this->nom;}
  public function getPrenom() {return $this->prenom;}
  public function getTelephone() {return $this->telephone;}
  public function getAdresseMail() {return $this->adresse_mail;}
  public function getPass() {return $this->pass;}


 public function setId($id) {
   if ($id > 0 && $id < 5){
     trigger_error('L\'id du client doit être un entier', E_USER_WARNING);
     return;
   }
   $this->id = $id;
 }


  public function setNom($nom) {
    if (is_str($nom) && strlen($nom)<=255) {
      // code...
      trigger_error('le nom de l\'utilisateur doi être un caractère', E_USER_WARNING );
      return;
    }
    $this->nom = $nom;
  }

  public function setPrenom($prenom) {
    if (is_str($prenom) && strlen($prenom)<=255){
      trigger_error('Le prénom de l\'utilisateur doit être un caractère', E_USER_WARNING);
      return;
    }
    $this->prenom = $prenom;
  }

  public function setNumTel($telephone) {
    if($telephone >=0 && $telephone <=255){
      trigger_error('Le numéro de téléphone de l\'utilsateur ne doit pas dépasser 255', E_USER_WARNING);
      return;
    }
    $this->telephone = $telephone;
  }

  public function setAdresseMail($adresse_mail) {
    if (is_str($adresse_mail) && strlen($adresse_mail)<=255){
      trigger_error('l\'adresse email de l\'utlisateur ne doit pas dépasser 255 caractères', E_USER_WARNING);
      return;
    }
    $this->adresse_mail = $adresse_mail;
  }

  public function setMdp($mdp) {
    if (is_str($pass) && strlen($pass)<=255){
      trigger_error('Le mot de passe ne doit pas dépasser 255 caractères', E_USER_WARNING);
      return;
    }
      $this->pass = $pass;
  }



}



 ?>
