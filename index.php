<?php
    session_start();
    error_reporting(E_ALL);

    require 'connexion.php';

    $mail =  isset($_POST['email']) ? $_POST['email'] : null;
    $nom =  isset($_POST['lastname']) ? $_POST['lastname'] : null;
    $prenom =  isset($_POST['firstname']) ? $_POST['firstname'] : null;
    $password =  isset($_POST['password']) ? $_POST['password'] : null;
    $adresse =  isset($_POST['adresse']) ? $_POST['adresse'] : null;

    if($mail){
      $sql = "insert into client(email, nom, prenom, password, adresse) values ('$mail', '$nom', '$prenom', '$password', '$adresse');";
      $bdd->exec($sql);
    }
?>


<!DOCTYPE html>
<html>

  <form name="form_register" action="" method="post">
    <label>Email</label>:<input type="text" name="email">
    <label>Nom</label>:<input type="text" name="lastname">
    <label>Prénom</label>:<input type="text" name="firstname">
    <label>Password</label>:<input type="text" name="password">
    <label>Adresse</label>:<input type="text" name="adresse">
    <input type="submit" name="valider" value="valider">
  </form>

<html>  