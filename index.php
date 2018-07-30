<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2</title>
  </head>
  <body>
    <p>
<?php
/*Création d'une condition si l'âge existe*/
  if(isset($_GET['lastname']) && isset($_GET['firstname']) && isset($_GET['age'])){
    echo $_GET['lastname'] . ' ' . $_GET['firstname'];
  } else {
    /*Autre condition si il n'est pas présent*/
    echo 'il manque l\'age';
  }
?>
    </p>
  </body>
</html>
