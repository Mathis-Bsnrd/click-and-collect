<!DOCTYPE html>

<?php
session_start();
error_reporting(E_ALL);

require 'connexion.php';
require 'client.class.php';

$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

$client = new client($bdd);

if(isset($_POST['connexion'])){
  $customer = $client->connexion($email, $password);
  if($customer){
    $_SESSION['customer'] = $customer;
  }
}
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


  <h1>Connexion</h1>

  <form method="post">

    <label for="email">Adresse électronique :</label></br>
    <input class="formulaire" type="email" id="email" name="email" value=""></br>
    <label for="mdp">Mot de passe :</label></br>
    <input class="formulaire" type="password" id="mdp" name="mdp"></br>
    <input id="myButton" class="buttonform" type="submit" name="connexion" value="Connexion">
    </br>
    </br>
    <button id="creation" class="buttonform" type="button"> Créer un compte </button>

  </form>

</body>

</html>