<?php 
$id=$_GET['id'];
include_once "connect.php";
$result=mysqli_query($cnx,"select * from produit where id=$id");
$produit=$result->fetch_assoc();
extract($produit);
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consultation du produit</title>
</head>
<body>
    <h2>le prix du produit <?=$produit['libelle']?>  est <?=$prix?> DHS </h2>
    
</body>
</html>