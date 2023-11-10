<?php
$login=$_POST['login'];
$id=$_GET['id'];//affichage.php?id=200
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>reception des donnees </h2>
    <h3>Login <?=$login?></h3>
    <h3>Mot de passe  <?=$_POST['passe']?></h3>
    <h3>id  <?=$id?></h3>


</body>
</html>