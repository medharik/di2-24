<?php
$hp = ['image' => 'images/pc1.jpg', 'libelle' => 'hp dv8', 'prix' => 5000, 'qte' => 5,'marque'=>'hp','etat'=>'neuf'];
$dell = ['image' => 'images/pc2.jpg', 'libelle' => 'dell d9', 'prix' => 9000, 'qte' => 10,'marque'=>'dell','Etat'=>'reconditionne'];
$entete=[];
foreach ($dell as $k => $v) {
    $entete[]=$k;
}
// $c => $v
$stock = [0 => $hp, 1 => $dell];
// $key => $produit
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <table class="table">
        <thead>
            <tr>
            <?php foreach ($entete as $v) {?>  
            <th scope="col"><?=$v?></th>
            <?php }?>
              
            </tr>
        </thead>
        <tbody>

            <?php foreach ($stock as $key => $produit) { ?>
                <tr>
                    <?php foreach ($produit as $c => $v) { ?>
                        <td scope="row">
                            <?php if ($c == 'image') { ?>
                                <img src="<?= $v ?>" width="100" alt="">
                            <?php } else { ?>
                                <?= $v ?>
                            <?php } ?>
                        </td>
                    <?php } ?>

                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>