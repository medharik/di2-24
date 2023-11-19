<?php 
//recuperer l'id depuis le lien
$id = $_GET['id'];
//connexion bd
$cnx = mysqli_connect("localhost", "root", "", "dbrevision1");
// envoyer la requete  (query sql ) 
$result = mysqli_query($cnx, " select * from produit where id=$id");
//afficher les resultats de la requete
$produit=$result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation produit</title>
</head>
<body>
    <h2>le prix du produit <?=$produit['libelle']?> est <?=$produit['prix']?>DHS</h2>
</body>
</html>