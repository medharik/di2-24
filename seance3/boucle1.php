<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>les boucles et conditions</title>
</head>
<body>
<?php 
echo "<ul>";
for ($i=1; $i <= 5; $i++) { 
    echo "<li>i est $i</li>";
}
echo "</ul>";
?>    
<hr>
<ul>
<?php for ($i=1; $i <=5 ; $i++) { ?>
    <li>i est <?=$i?>  </li>
<?php }?>
</ul>



</body>
</html>