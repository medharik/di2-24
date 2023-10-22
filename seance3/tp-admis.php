<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des notes et decisions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Etudiant</th>
                <th scope="col">Note</th>
                <th scope="col">Decision</th>
            </tr>
        </thead>
        <tbody>

            <?php for ($i = 1; $i <= 10; $i++) {
                $note = random_int(0, 20);
                if ($note > 10) {
                    $decision = "Admis";
                    $c="success";
                } else {
                    $decision = "Ajourné";
                    $c="danger";

                }
            ?>
                <tr>
                    <th scope="row"><?= $i ?></th>
                    <td>Etudiant <?php echo $i ?></td>
                    <td><?= $note ?></td>

                    <td>

                    <button type="button" class="btn btn-<?=$c?> position-relative">
  <?=$decision?>

</button>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>

</body>

</html>