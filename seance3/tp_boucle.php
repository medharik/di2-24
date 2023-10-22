<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tableaux </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Libelle</th>
                <th scope="col">Prix</th>
                <th scope="col">Qte en stock</th>
                <th scope="col">Etat de stock</th>
            </tr>
        </thead>
        <tbody>

            <?php for ($i = 1; $i <= 10; $i++) {
                $prix = random_int(10, 1000);
                $qte = random_int(0, 20);
            ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?php echo "produit  $i" ?></td>
                    <td><?= $prix; ?></td>
                    <td><?= $qte ?></td>
                    <td><?php if ($qte == 0) {
                            $etat = 'En rupture';
                            $color="danger";
                        } else if($qte<5) {
                            $etat = 'Alerte de stock';
                            $color="warning";
                        }else{
                            $etat='Disponible';
                            $color='primary';
                        }
                        ?>
                    <button type="button" class="btn btn-<?=$color?>">
  <?=$etat?> <span class="badge text-bg-secondary"><?=$qte?></span>
</button>    
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>


</body>

</html>