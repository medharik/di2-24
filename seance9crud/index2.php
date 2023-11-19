<?php 
$cnx=mysqli_connect("localhost",'root','','db1');
$result=mysqli_query($cnx,"select * from produit order by id desc");


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des produits</title>
</head>
<body>
    <table align="center" border="1" width="90%">
        <tr>
            <th>id</th>
            <th>libelle</th>
            <th>prix</th>
            <th>Actions</th>
        </tr>
        <?php while($p=$result->fetch_object()){ ?>
                <tr>
                    <td><?=$p->id?></td>
                    <td><?=$p->libelle?></td>
                    <td><?=$p->prix?></td>
                    <td></td>
                </tr>
        <?php } ?>
    </table>
    
</body>
</html>