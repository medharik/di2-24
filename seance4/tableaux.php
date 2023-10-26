<?php
//les tableaux  : ensemble de valeur (pas forcement du meme type), 
//les tableaux en php sont dynamiques 
$t1 = array("ali", 17, 1010, 0.5);
$t2 = ["ali", 17, 1010, 0.5,["ali","test"]];
// int t[10];
// echo $t2[4];//key,index =4 Undefined
$t2[4] = 200;
$t2[10] = "test 10";
$t2[1000] = "c'est push";
// $t2[]
//supprimer  un elem,en
unset($t2[10]);
$t2[10] = "encore une fois un 10";
$t2[] = "test push 2";
// int c[3];
// tableau associatif (key => value)//hash, map
$a = ["nom" => 'Doe', 'prenom' => 'john', 'age' => 10];
$a[] = 100;
$a[] = 200;
$a["nom"] = "ALami";
$a["genre"] = "homme";
echo $a["nom"], $a[0], $a[1];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    la longeur du tableau t2 est <?= count($t2) ?>
    <pre>
    <?php print_r($t2); ?>
</pre>
    la longeur du tableau a est <?= count($a) ?>
    <pre>
    <?php print_r($a); ?>
</pre>
    <h2>for pour tableau 100% indexe </h2>
    <?php foreach($t2 as $i=>$v) { ?>
        <li>element d'indice : <?=$i?> est <?=$v?> ou <?=$t2[$i]?></li>
    <?php } ?>
    <?php foreach($t2 as $v) { ?>
        <li>element d'indice : <?=$v?> </li>
    <?php } ?>

</body>

</html>