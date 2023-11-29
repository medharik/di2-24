<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nouveau produit</title>
</head>
<body>
    <?php include "_menu.php";?>
    <h2>Nouveau produit</h2>
    <form action="store.php" method="post" enctype="multipart/form-data">
        <label for="nom_produit">Nom du produit : </label><br/>
        <input type="text" id="nom_produit" name="libelle"><br/>
        <label for="prix">Prix du produit : </label><br/>
        <input type="text" id="prix" name="prix"><br/>
        Image : <input type="file" name="chemin" id="">
        <button>Ajouter</button>
    </form>
    

</body>
</html>