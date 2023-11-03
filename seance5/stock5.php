<?php
$hp = ['id' => 1, 'libelle' => 'hp dv8', 'image' => 'images/pc1.jpg', 'prix' => 5000, 'qte' => 2];

$dell = ['id' => 2, 'libelle' => 'dell d7', 'image' => 'images/pc2.jpg', 'prix' => 6000, 'qte' => 0];
$stock = [0 => $hp, 1 => $dell];
$tab_images=['pc1.jpg','pc2.jpg','pc3.webp','pc4.jpg','pc5.jpg'];

for ($i=2; $i <=100 ; $i++) { 
$key=random_int(0,count($tab_images)-1);
    $stock[] = ['id' => $i+1, 'libelle' => "produit numero $i", 'image' => 'images/'.$tab_images[$key], 'prix' => random_int(10,10000), 'qte' => random_int(0,10)];

}
// $k => $v
// $k=>$v
// echo $stock[0]['libelle'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etat de stock</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
</head>

<body>
    <h1 class="text-center text-primary fs-2 my-3">Etat de stock le <?= date('d-m-Y') ?></h1>
    <div class="container">
        <table class="table table-dark" id="table1">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Libelle</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Qte</th>
                    <th scope="col">Etat de stock</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stock as $k => $v) { ?>
                    <tr>
                        <th scope="row"><?=$v['id']?></th>
                        <th scope="row"><img src="<?=$v['image']?>" width="100"></th>
                        <td><?=$v['libelle']?></td>
                        <td><?=$v['prix']?></td>
                        <td><?=$v['qte']?></td>
                        <td>
                        <?php 
                        if ($v['qte']==0) {
                            $etat="En rupture de stock";
                            $col="danger";
                        } else {
                            $etat="En  stock";
                            $col="success";
                        
                        }
                        
                       
                        ?>
<span class="badge text-bg-<?=$col?>"><?=$etat?></span>

                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>

    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"> </script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
    let table = new DataTable('#table1');
</script>
</body>

</html>