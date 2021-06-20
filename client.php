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

  $admin = new admin($bdd);

  if (isset($_POST['liste_client'])) {
    $data = $admin->show_client();
  }
  ?>

</head>

<body>
  <form id="liste_client" method="post">
    <input id="liste_client" class="buttonform" type="submit" name="liste_client" value="Liste des clients">
  </form>

</body>

</html>