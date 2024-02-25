<?php 
session_start();
if(!(isset( $_SESSION['login'] ) && $_SESSION['login'] == 'ali' && isset($_SESSION['passe'])  && $_SESSION['passe'] == '123' )) {
    header("location:login.php?cn=no");
};

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Bienvenue VIP :<?=$_SESSION['login']?> </h2>
<a href="deconnexion.php">DECONNEXION</a>
</body>
</html>