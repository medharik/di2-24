<?php 
//https://github.com/medharik/di2-24
//passage par valeur et par adresse (reference)
$a=20;
$b=$a;//passage par valeur 
$c=$a;
$d=&$a;//passage par adresse (reference)
$a=40;
$b=10;
$d=100;
$a=13;
//valeur de a , b , c et d ?
echo "a=$a, b=$b,c=$c,d=$d <br>";
//les conditions 
$age=2;
$majeur=$age>18;
if($majeur){
    echo "Majeur<br>";
}else{
    echo "Mineur<br>";
}

$prenom="";
$t=[];
$prix=" ";
if($prix){
echo "<p> prix est $prix DHS </p>";
}
$bo=false;
var_dump($bo);
if($prenom){
echo "<p>Prenom est $prenom</p>";
}
if(1==="1"){
    echo "VRAI";
}else{
    echo "FAUX";
}
if($t){
    print_r($t);
}
if($bo){
    echo "<p>Bo  est $bo</p>";
 
}
//verifier l'equivalence booleane d'une valeur
$y=(bool)10;
var_dump($y);
//false <=> 0, [],"",'',"0"


// var_dump($majeur);
if($majeur){
    echo "<br/>Vous êtes majeur.";
}else{
    echo "<br/>Vous etes  mineur.";
}
$nombre=10.0;
if ($nombre==10) {
 // echo "<h3>nombre est $nombre </h3>";
}

// for ($i=3; $i>=0 ; $i--) { 
//     echo "<li>i est $i</li>";
// }

$trouve=true;
for ($i=0; $i <=3 && $trouve  ; $i++) { 
 echo "<li>je suis dans boucle for $i</li>";
 if($i===1) $trouve=false;

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "<ul>";
    for ($i=0; $i <3 ; $i++) { 
        echo "<li>i est $i</li>";
    }
    echo "</ul>";
    
    
    ?>

    
</body>
</html>