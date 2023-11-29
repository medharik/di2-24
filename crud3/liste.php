<?php 

include_once "connect.php";
$result=mysqli_query($cnx,"select * from produit order by id desc");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <?php include_once "_menu.php";?>
    <form action="delmultiple.php" method="post">

  
    <table border="1" align="center" width="1000">
        <tr><td>#</td>
            <td>id</td>
            <td>libelle</td>
            <td>image</td>
            <td>actions</td>
        </tr>
        <?php while($p=$result->fetch_assoc()){?>
        <tr>
            <td><input type="checkbox" name="check[]" id="check<?=$p['id']?>" value="<?=$p['id']?>"></td>
            <td><?=$p['id']?></td>
            <td><?=$p['libelle']?></td>
            <td><img src="<?=$p['chemin']?>" width="150" alt=""></td>
            <td><a onclick="return confirm('supprimer?') " href="del.php?id=<?=$p['id']?>">Supprimer</a>
        <a href="show.php?id=<?=$p['id']?>">Consulter</a>
        </td>
        </tr>
        <?php }?>
    </table>
    <button>Supprimer</button>
    </form>
</body>
</html>