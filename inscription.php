<!DOCTYPE html>

<?php
session_start();
error_reporting(E_ALL);

require 'connexion.php';
require 'client.class.php';

$email = isset($_POST['email']) ? $_POST['email'] : null;
$nom = isset($_POST['nom']) ? $_POST['nom'] : null;
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$adresse = isset($_POST['adresse']) ? $_POST['adresse'] : null;
$cp = isset($_POST['cp']) ? $_POST['cp'] : 0;
$ville = isset($_POST['ville']) ? $_POST['ville'] : null;

$client = new client($bdd);

$data = $client->creation_compte($email, $nom, $prenom, password_hash($password, PASSWORD_DEFAULT), $adresse, $cp, $ville);
?>

<html>

<head>
  <title>Click and Collect</title>
  <meta charset="utf-8" />
  <link rel="icon" href="img/clc.jpg">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <script type="text/javascript" src="./js/jquery.min.js"></script>
  <script type="text/javascript" src="./js/javascript.js"></script>

</head>

<body>
  <h1>Création de compte</h1>

  <form method="post">

    <label for="email">Adresse électronique :</label></br>
    <input class="formulaire" type="email" id="email" name="email" value=""></br>
    <label for="nom">Nom :</label></br>
    <input class="formulaire" type="text" id="nom" name="nom" value=""></br>
    <label for="prenom">Prénom :</label></br>
    <input class="formulaire" type="text" id="prenom" name="prenom" value=""></br>
    <label for="password">Veuillez choisir un mot de passe :</label></br>
    <input class="formulaire" type="password" id="password" name="password" value=""></br>
    <label for="adresse">Adresse :</label></br>
    <input class="formulaire" type="text" id="adresse" name="adresse" value=""> </br>
    <label for="adresse">Code Postal :</label></br>
    <input class="formulaire" type="text" id="cp" name="cp" value=""></br>
    <label for="adresse">Ville :</label></br>
    <input class="formulaire" type="text" id="ville" name="ville" value=""></br>
    <input id="myButton" class="buttonform" type="submit" value="Confirmer l'inscription">

  </form>

</body>

</html>