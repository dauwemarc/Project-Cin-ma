<?php

if(empty($_POST['email']) || empty($_POST['mdp'])){
  echo 'Formulaire incorrect !';
}
else{
  $membre = new MembreCinema([
    'email' => $_POST['email'],
    'mdp' => $_POST['mdp']
  ]);

  $bdd = new PDO('mysql:host=localhost;dbname=projet_cinema', 'root', '');
  $manager = new ManagerMembre($bdd);
  $manager->getInsert($memb);
  $manager->getSelect($memb);
}



 ?>
