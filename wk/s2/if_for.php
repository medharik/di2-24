<?php 
$age=20;
$majeur=$age>18;
// echo "<h1>Majeur est $majeur</h1>";
// if ($majeur) {
//     echo "Majeur";
// }else{
//     echo "Mineur";
// }

$prenom=null;
if ($prenom) {
    echo "prenom est $prenom";
}
$prix=0;
if ($prix) {
    echo " le prix est $prix";

}
$equiv=(bool)$prenom;
var_dump($equiv);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>les conditions , boucles (for) </title>
</head>
<body>

<?php 
// for ($i=0; $i >10; $i+=2) { 
//     echo "<li> 1- i est $i<li>";
// }
// for ($i=10; $i >10; $i++) { 
//     echo "<li>2- i est $i<li>";
// }
// for ($i=10; $i <=10; $i++) { 
//     echo "<li>3- i est $i<li>";
// }
// for ($i=6; $i >=0; $i--) { 
//     echo "<li>4- i est $i<li>";
// }
// for ($i=14; $i <10; $i++) { 
//     echo "<li>i est $i<li>";
// }
// $trouve=false;
// for ($i=0; $i <5 && !$trouve ; $i++) { 
//     echo "<li>6- i est $i<li>";
//     if($i==2) $trouve=true;
// }
$trouve=false;
for ($i=1; $i <7 && !$trouve ; $i++) { 
    echo "<li>7- i est $i<li>";
    if($i%2==0) continue;
    echo "A est $i";
    if($i%4==1) break;
    echo "B est $i";
}
?>    
</body>
</html>