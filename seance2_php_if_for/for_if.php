<?php 
//passage par valeur et par adresse (reference)
$a=20;
$b=$a;
$c=$a;
$d=&$a;
$a=40;
$b=10;
$d=100;
//valeur de a , b , c et d
//Rep 1 : a=40,b=10,c=20,d=adresse
echo "a=$a, b=$b,c=$c,d=$d <br>";
//les conditions 
$age=21;
$majeur=$age>18;
$prenom="";
$t=[];
$prix=0.0;
$bo="false";
if($prenom){
echo "<p>Prenom est $prenom</p>";
}
if($t){
    print_r($t);
}
if($bo){
    echo "<p>Bo  est $bo</p>";
 
}
//verifier l'equivalence booleane d'une valeur
$y=(bool)"test";
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
$trouve=true;
for ($i=0; $i <=3 && $trouve  ; $i++) { 
 echo "<li>je suis dans boucle for $i</li>";
 if($i==1) $trouve=false;

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
<ul>

</ul>
    
</body>
</html>