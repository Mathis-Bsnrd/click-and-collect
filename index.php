<!DOCTYPE html>

<?php
session_start();
error_reporting(E_ALL);

//require 'connexion.php';

      $email = ISSET ($_POST['email']) ? $_POST['email']: null;
      $lastname = ISSET ($_POST['nom']) ? $_POST['nom']: null;
      $firstname = ISSET ($_POST['prenom']) ? $_POST['prenom']: null;
      $password = ISSET ($_POST['password']) ? $_POST['password']: null;
      $password2 = ISSET ($_POST['adresse']) ? $_POST['adresse']: null;

      if($email){
      $sql = "insert into user (email, nom, prenom, password, adresse) values ('$email', '$nom', '$prenom', '$password', '$adresse');";
      $bdd->query($sql);
      }
?>

<html>
    <head>
        <title>New York Souvenir</title>
		<meta charset="utf-8"/>
		<link rel="icon" href="img/clc.jpg">
		<link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/style.css">
		
    </head>
    <body>
                <h1>Création de compte</h1>

 <form  method="post">

  <label for="email">Adresse électronique :</label></br>
  <input class="formulaire" type="email" id="email" name="email" value="jeandupont@gmail.com"></br>
  <label for="nom">Nom :</label></br>
  <input class="formulaire"type="text" id="nom" name="nom" value="Dupont"></br>
  <label for="prenom">Prénom :</label></br>
  <input class="formulaire"type="text" id="prenom" name="prenom" value="Jean"></br>
  <label for="mdp">Veuillez choisir un mot de passe :</label></br>
  <input class="formulaire" type="password" id="mdp" name="mdp"></br>
  <label for="adresse">Adresse :</label></br>
  <input class="formulaire" type="text" id="adresse" name="adresse"> </br>
    <label for="adresse">Code Postal :</label></br>
  <input class="formulaire" type="text" id="cp" name="cp"></br>
    <label for="adresse">Ville :</label></br>
  <input class="formulaire" type="text" id="ville" name="ville"></br>
  <button class="buttonform" type="button"> Confirmer l'inscription </button>
  
</form>

    </body>
</html>