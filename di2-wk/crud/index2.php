<?php 
//recuperer tous les produits de la base de donnees
$cnx=mysqli_connect("localhost","root","","dbase");
if($cnx){
   $resultat= mysqli_query($cnx," select * from produit order by id desc");
//    print_r($resultat);
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>
</head>
<body>
    <h1>Liste des <?=$resultat->num_rows?> produits </h1>
    <table border="1" width="1000" align="center">
        <tr>
            <th>Id</th>
            <th>libelle</th>
            <th>prix</th>
            <th>Actions</th>
        </tr>
<?php while($p=$resultat->fetch_assoc()){?>
        <tr>
            <td><?=$p['id']?></td>
            <td><?=$p['libelle']?></td>
            <td><?=$p['prix']?></td>
            <td></td>
        </tr>
<?php } ?>

    </table>

</body>
</html>