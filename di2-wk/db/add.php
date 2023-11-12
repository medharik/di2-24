<?php 

$prix=$_POST['prix'];

//  mysqli_close($cnx);
$cnx=mysqli_connect("localhost","root","","dbwk1");
$libelle= mysqli_real_escape_string($cnx, $_POST['libelle']);
mysqli_query($cnx,"insert into produit(libelle,prix) values ('o'neil',$prix)");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        Produit <?=$libelle ?> est ajoute succes
    </p>
    
</body>
</html>