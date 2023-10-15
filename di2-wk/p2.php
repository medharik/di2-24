<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page PHP</title>
</head>
<body>
    <?php $p="Ali";?>
    <h2>Ma premiere page php </h2>
    <h3><?php echo "salut $p"; ?></h3>

    <ul>
        <?php for($i=1;$i<=10;$i++) {?>
        <li>Message <?=$i?></li>
        <?php }?>
    </ul>
    
</body>
</html>