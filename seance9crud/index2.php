<?php 
if(isset($_GET['del']) && $_GET['del']=='yes'){
echo "suppression OK<br>";
}
if(isset($_GET['add']) && $_GET['add']=='ok'){
echo "Ajout OK<br>";
}
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
<?php include_once "menu.php";?>
<form action="deletemultiple.php" method="post">

    <table align="center" border="1" width="90%">
        <tr>
            <th>#</th>
            <th>id</th>
            <th>libelle</th>
            <th>prix</th>
            <th>Actions</th>
        </tr>
        <?php 
        $i=1;
        while($p=$result->fetch_object()){ ?>
                <tr>
                    <td><input type="checkbox" name="id[]" id="id<?=$i++?>" value="<?=$p->id?>"></td>
                    <td><?=$p->id?></td>
                    <td><?=$p->libelle?></td>
                    <td><?=$p->prix?></td>
                    <td>
                        <a onclick="return confirm('Supprimer?')" href="delete.php?id=<?=$p->id?>">Supprimer</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
            <button>Supprimer</button>
        </form>
            
        </body>
</html>