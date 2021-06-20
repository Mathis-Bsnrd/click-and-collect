<!DOCTYPE html>

<?php
session_start();
error_reporting(E_ALL);

require 'connexion.php';
require 'admin.class.php';

$id = isset($_POST['id']) ? $_POST['id'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

$admin = new admin($bdd);

if(isset($_POST['connexion'])){
  $admin = $admin->connexion($id, $password);
  if($admin){
    $_SESSION['admin'] = $admin;
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
  <script type="text/javascript" src="./js/connexion_admin.js"></script>

</head>

<body>


  <h1>Connexion</h1>

  <form action="produit_admin.php" method="post">
    <label for="email">Identifiant :</label></br>
    <input class="formulaire" type="text" id="id" name="id" value=""></br>
    <label for="mdp">Mot de passe :</label></br>
    <input class="formulaire" type="password" id="password" name="password" value=""></br>
    <input id="myButton" class="buttonform" type="submit" name="connexion" value="Connexion">
  </form>
  <br>
  
  <button id="connexion_client">Connexion client</button>

</body>

</html>