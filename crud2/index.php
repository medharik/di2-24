<?php 
$cnx=mysqli_connect("localhost",'root','','db1');
$result=mysqli_query($cnx,"select * from produit order by id desc");



?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des prdouits</title>
</head>
<body>
    <h2>Liste des produits</h2>
    <table border="1" align="center" width="1000">
        <tr>
            <td>id</td>
            <td>libelle</td>
            <td>action</td>
        </tr>
<?php while($p=$result->fetch_assoc()){?>
        <tr>
            <td><?=$p['id']?></td>
            <td><?=$p['libelle']?></td>
            <td>
                <a onclick="return confirm('Supprimer?')" href="supprimer.php?id=<?=$p['id']?>">Supprimer</a>
            <a href="show.php?id=<?=$p['id']?>">Consulter</a>
            </td>
        </tr>
        <?php }?>
    </table>
</body>
</html>