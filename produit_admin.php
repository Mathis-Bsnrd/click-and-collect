<!DOCTYPE html>

<?php
session_start();
error_reporting(E_ALL);

require 'connexion.php';
require 'admin.class.php';

$produit = isset($_POST['produit']) ? $_POST['produit'] : null;
$client = isset($_POST['client']) ? $_POST['client'] : null;
$commande = isset($_POST['commande']) ? $_POST['commande'] : null;

$admin = new admin($bdd);

if (isset($_POST['produit'])) {
  $result = $admin->show_produit();
}

if (isset($_POST['client'])) {
  $result = $admin->show_client();
}

if (isset($_POST['commande'])) {
  $result = $admin->show_commande();
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
  <script type="text/javascript" src="./js/admin.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>

  <form method='post'>
    <input type="submit" id="produit" name="produit" value="produit">
    <input type="submit" id="client" name="client" value="client">
    <input type="submit" id="commande" name="commande" value="commande">
  </form>

</body>

</html>