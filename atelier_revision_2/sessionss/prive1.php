<?php 
include "Utils.class.php";
Utils::demarer_session();
$ligne=Utils::checker($_SESSION['login'],$_SESSION['passe']);
if (!$ligne) {
    header("location:login.php?cn=aut");
} 

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRIVE 1 </title>
</head>
<body>
    <a href="deconnexion.php">DECONNEXION</a>
    <h1>prive 1 </h1>
    <h2>Bienvenue : <?=$_SESSION['prenom']?></h2>
    <h2>Id  : <?=$_SESSION['id']?></h2>
    
</body>
</html>