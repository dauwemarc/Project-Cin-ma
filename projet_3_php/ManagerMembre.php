<?php
require model_membre.php;
require model_reservation.php;
require insert-memb-ttt.php;
require select-memb-ttt.php;

class ManagerMembre {

  private $_bdd;

  public function __construct($bdd){
    $this->setBdd($bdd);
  }

  public function getInsert(Membre $memb){ //Insertion des données dans différentes tables de la base de données
    $req = $this->_bdd->prepare('INSERT INTO inscription (nom, prenom, email, mdp) VALUES (:nom, :prenom, :email, :mdp)');
    $req->bindValue(':nom', $memb->getNom(), PDO::PARAM_STR);
    $req->bindValue(':prenom', $memb->getPrenom(), PDO::PARAM_STR);
    $req->bindValue(':email', $memb->getEmail(), PDO::PARAM_STR);
    $req->bindValue(':mdp', $memb->getMdp(), PDO::PARAM_STR);
    $req->execute([
      $memb->getNom(),
      $memb->getPrenom(),
      $memb->getEmail(),
      $memb->getMdp()
    ]);

    $req = $this->_bdd->prepare('INSERT INTO connexion (email, mdp) VALUES (:email, :mdp)');
    $req->bindValue(':email', $memb->getEmail(), PDO::PARAM_STR);
    $req->bindValue(':mdp', $memb->getMdp(), PDO::PARAM_STR);
    $req->execute([
      $memb->getEmail(),
      $memb->getMdp()
    ]);
  }

  public function getSelect(Membre $memb){ //Affichage des données
    $req = $this->_bdd->prepare('SELECT email FROM connexion WHERE email = :email, mdp = :mdp');
    $req->execute();
    $donnee = $req->fetch();
  }

  public function getList(Membre $memb){
    $req = $this->_bdd->prepare('SELECT id, email, mdp FROM connexion ORDER BY id');
  }

  public function getDelete(Membre $memb){ //Suppression des données
    $this->_bdd->execute('DELETE FROM connexion WHERE id = '.$memb->id());
  }

  public function getUpdate(Membre $memb){ //Mise à jour des données
    $req = $this->_bdd->prepare('UPDATE connexion SET email = :email, mdp = :mdp');
    $req->bindValue(':email', $memb->getEmail(), PDO::PARAM_STR);
    $req->bindValue(':mdp', $memb->getMdp(), PDO::PARAM_STR);
    $req->execute([
      $memb->getEmail(),
      $memb->getMdp()
    ]);
  }

  public function setBdd(PDO $bdd){
    $this->_bdd = $bdd;
  }
}








 ?>
