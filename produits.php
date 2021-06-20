<!DOCTYPE html>
<html>

<head>
  <title>Click and Collect</title>
  <meta charset="utf-8" />
  <link rel="icon" href="img/clc.jpg">
  <link rel="stylesheet" href="./css/materialize.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <script src="./js/jquery.min.js"></script>
  <script src="./js/admin.js"></script>
  <script src="./js/materialize.min.js"></script>

  <?php
  session_start();
  error_reporting(E_ALL);

  require 'connexion.php';
  require 'admin.class.php';

  $name = isset($_POST['name']) ? $_POST['name'] : null;
  $price = isset($_POST['price']) ? $_POST['price'] : null;

  $newname = isset($_POST['newname']) ? $_POST['newname'] : null;
  $newprice = isset($_POST['newprice']) ? $_POST['newprice'] : null;
  $oldname = isset($_POST['oldname']) ? $_POST['oldname'] : null;

  $admin = new admin($bdd);

  if (isset($_POST['liste_produit'])) {
    $data = $admin->show_produit();
  }

  if (isset($_POST['valider_create'])) {
    $data = $admin->create_product($name, $price);
  }

  if (isset($_POST['valider_delete'])) {
    $data = $admin->delete_product($name);
  }

  if (isset($_POST['valider_update'])) {
    $data = $admin->update_product($newname, $newprice, $oldname);
  }
  ?>

</head>

<body>
  <form id="liste_produit" method="post">
    <input id="liste_produit" class="buttonform" type="submit" name="liste_produit" value="Liste des produits">
  </form>
  <button id="ajouter">Ajouter un produit</button>
  <button id="modifier">Modifier un produit</button>
  <button id="supprimer">Supprimer un produit</button>

  <form id="ajout_produit" method="post" class="ajouter">
    <label for="name">Nom :</label></br>
    <input type="text" id="name" name="name" value=""></br>
    <label for="price">Prix :</label></br>
    <input type="text" id="price" name="price" value=""></br>
    <input id="valider_create" class="buttonform" type="submit" name="valider_create" value="Valider">
  </form>

  <form id="suppr_produit" method="post" class="ajouter">
    <label for="name">Nom :</label></br>
    <input type="text" id="name" name="name" value=""></br>
    <input id="valider_delete" class="buttonform" type="submit" name="valider_delete" value="Valider">
  </form>

  <form id="update_produit" method="post" class="ajouter">
    <label for="name">Nouveau nom :</label></br>
    <input type="text" id="newname" name="newname" value=""></br>
    <label for="name">Nouveau prix :</label></br>
    <input type="text" id="newprice" name="newprice" value=""></br>
    <label for="name">Ancien nom :</label></br>
    <input type="text" id="oldname" name="oldname" value=""></br>
    <input id="valider_update" class="buttonform" type="submit" name="valider_delete" value="Valider">
  </form>

</body>

</html>