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
                <h1>Connexion</h1>

 <form  method="post">

  <label for="email">Adresse électronique :</label></br>
  <input class="formulaire" type="email" id="email" name="email" value=""></br>
  <label for="mdp">Mot de passe :</label></br>
  <input class="formulaire" type="password" id="mdp" name="mdp"></br>

</form>

    </body>
</html>