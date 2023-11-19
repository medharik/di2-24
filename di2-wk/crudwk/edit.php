<?php 
//recuperer l'id depuis le lien
$id = $_GET['id'];
//connexion bd
$cnx = mysqli_connect("localhost", "root", "", "dbrevision1");
// envoyer la requete  (query sql ) 
$result = mysqli_query($cnx, " select * from produit where id=$id");
//afficher les resultats de la requete
$produit=$result->fetch_assoc();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edition du  produit</title>
</head>
<body>
    <h2>Edition produit</h2>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?=$id?>">
        Libelle : <input type="text" name="libelle" id="" value="<?=$produit['libelle']?>">
        Prix : <input type="text" name="prix" id="" value="<?=$produit['prix']?>">
        <button>Modifier le produit</button>
    </form>
</body>
</html>