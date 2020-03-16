<?php

if(empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['mdp'])){
  echo 'Formulaire incorrect ! Veuillez réessayer !';
}
else{
  $membre = new MembreCinema([
    'nom' => $_POST['nom'],
    'prenom' => $_POST['prenom'],
    'email' => $_POST['email'],
    'mdp' => $_POST['mdp']
  ]);

  $bdd = new PDO('mysql:host=localhost;dbname=projet_cinema', 'root', '');
  $manager = new ManagerMembre($bdd);
  $manager->getInsert($memb);

}

 ?>
