<?php
//connexion bd
$cnx = mysqli_connect("localhost", "root", "", "dbrevision1");
// envoyer la requete  (query sql ) 
$result = mysqli_query($cnx, " SELECT * FROM produit ");
// fetch 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <h2 class="text-center text-primary fs-4">Liste des produits </h2>
    <a href="create.php" class="btn btn-success">Nouveau produit</a>
    <!-- table>tr*2>td*4 -->
    <form action="deletem.php" method="post">

    <table class="table">
        <tr>
            <td>#</td>
            <td>id</td>
            <td>libelle</td>
            <!-- <td>prix</td> -->
            <td>actions</td>
        </tr>
        <?php while ($produit = $result->fetch_assoc()) { ?>
            <tr>
                <td><input type="checkbox" name="id[]" id="k<?=$produit['id']?>" value="<?=$produit['id']?>"></td>
                <td><?=$produit['id']?></td>
                <td><?=$produit['libelle']?></td>
                <!-- <td><?=$produit['prix']?></td> -->
                <td>
                <a onclick="return confirm('supprimer?') "  href="delete.php?id=<?=$produit['id']?>" class="btn btn-danger">Supprimer</a>
                 <a class="btn btn-primary" href="show.php?id=<?=$produit['id']?>">Consulter</a>
                 <a class="btn btn-warning" href="edit.php?id=<?=$produit['id']?>">Editer</a>
                </td>
            </tr>

        <?php } ?>
    </table>
    <div class="my-3">
        <button class="btn btn-sm btn-danger">Supprimer</button>
    </div>
    </form>
</body>

</html>