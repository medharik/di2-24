<?php 
//recuperer l'id depuis le lien (get)

$id=$_GET['id'];
//cnx bd
$cnx=mysqli_connect("localhost",'root','','db1');
$result=mysqli_query($cnx,"select * from produit where id=$id");
$produit=$result->fetch_assoc();
print_r($produit);
extract($produit);
//fetch du  resultat 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Le prix  du produit <?=$libelle?> est <?=$prix?>DHS</h2>
   
</body>
</html>