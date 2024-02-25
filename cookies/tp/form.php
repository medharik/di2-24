<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form cookie</title>
</head>
<body>
    <?php if(isset($_GET['er']) && $_GET['er']=='yes' ){?>
<h2 style="color: 'red';">Tous les champs sont obligatoires</h2>
        <?php }?>
    <form action="autre.php" method="post">
        <input type="text" value="<?php if(isset($_COOKIE['pseudo'])) echo $_COOKIE['pseudo']?>" name="pseudo" placeholder="Entrer votre pseudo">
        <input type="text" value="<?= isset($_COOKIE['age'])? $_COOKIE['age']:''; ?>" name="age" placeholder="Entrer votre age ">
        <button>Envoyer</button>
    </form>
</body>
</html>