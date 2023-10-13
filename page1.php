<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mon premier code en php</title>
</head>

<body>
    <?php 
    $prenom = "Sanaa";
    $age=32;
    ?>

    <h1 class="jfkjhk" >1- Bienvenue <?= $prenom;?>, tu as <?php echo $age; ?> ans </h1>
    <h2>2- <?php echo "Bienvenue $prenom, tu as $age ans";?></h2>
    <h2>3- <?php echo 'Bienvenue $prenom, tu as $age ans';?></h2>
    4- <?php echo "<h2>Bienvenue $prenom, tu as $age ans</h2>";?>
    5- <?php echo '<h2>Bienvenue $prenom, tu as $age ans</h2>';?>
    6- <?php echo 'Bienvenue '. $prenom.', tu as '.$age.' ans';?>
    7- <?php echo "Bienvenue {=$prenom}, tu as {$age} ans";?>

    <br><br><br><br>
</body>

</html>