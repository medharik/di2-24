<?php 
$prenom="Rhita" ;
$nom="Alami";
$age=30;
$genre="femme";
if ($genre=="homme") {
    $pol="Mr.";
    $coleur="blue";
    $t="";
} else {
    
    $pol="Mme.";
    $coleur="pink";
    $t="e";
}
if ($age>21) {
$maj="Majeur" ;
} else {
    $maj="Mineur";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemple 2 en php : variable et echo </title>
</head>
<body>
<h2 style="color:<?=$coleur?>">Bienvenue <?=$pol?> <?= $nom;?> <?= $prenom;?>  </h2>
<h3>tu as <?=$age ?> ans</h3>
    <h4>tu es <?php echo $maj;?><?=$t?> </h4>
</body>
</html>