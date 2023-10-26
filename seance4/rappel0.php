<?php
//[]
//null
// false <=> 0,0.0 ,[],null,"0"
//true <=>"ali"," ","0.0",1,[1,2,3]
$x = "0";
$test = (int)$x;
var_dump($test);
if ($x) {
    echo "x est $x";
}
$age = 20.5;
// unset($age); supprimer une variable
// ou
 $age =null;
$t = (int)$age;
//
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php for ($i = 0; $i < 6; $i++) {

            echo "A<br>";
            if ($i == 2) continue;
            echo "B<br>";
            if ($i % 4 == 3) break;
            echo "c<br>";
        ?>

            <p>i est <?= $i ?></p>
            <hr>

        <?php }
        echo "X";
        ?>
    </div>

</body>

</html>