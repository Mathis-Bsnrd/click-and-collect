<!DOCTYPE html>

<?php
session_start();
error_reporting(E_ALL);

require 'connexion.php';

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

  <button id="client">Client</button>
  <button id="produit">Produit</button>
  <button id="commande">Commande</button>


</body>

</html>