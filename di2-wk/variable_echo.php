<?php 
$prenom='O\'neil';//echapement de '
$age=20;
$genre="homme";
$c=&$age;
$a=$age;//passage par valeur (2 memoires separees)
$x=&$a;// passage par adresse(reference) : meme memoire 
$y=$a;
$b=$a;
$age=30;
$a=40;
$c=100;
$r="salut $prenom";
echo 'r= $r<br>';

//
echo "a=$a,b=$b,c=$c, age=$age,x=$x,y=$y<br>";
echo $a,"/",$b,"/",$age,"<hr>";
print 'test $a';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>1- Bienvenue <?php echo $prenom ;?>, vous avez <?php echo $age;?> ans</h2>
<?php echo "<h2 class=\"test\">2- Bienvenue $prenom , vous avez $age ans </h2>"; ?>
<?php echo '<h2 class="test">3- Bienvenue'. $prenom.' , vous avez'. $age.' ans </h2>'; ?>
<?php echo '<h2 class=>4- Bienvenue $prenom , vous avez $age ans </h2>'; ?>
</body>
</html>