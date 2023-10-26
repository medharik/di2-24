<?php 
//tableau en php : ensemble de valeurs (taille dynamique)
//tableau indexe
$tab = array("1", "2", "3"); //on peut utiliser des chaines, des nombres ou des tableaux
$tab = [10, "hp", 16.5]; //on peut utiliser des chaines, des nombres ou des tableaux
$tab[3]="sony vaio";
$tab[]="koita";//push 
for ($i=0; $i <count($tab) ; $i++) { 
    echo "<h4>$tab[$i]</h4>";
}
unset($tab[4]);//supprimer un element
echo "<pre>";
print_r($tab);
//tableau associatif
echo "</pre>";
$ali=["prenom"=>"ali","age"=>19,"genre"=>"homme"];//key=>value
$ali['metier']="developer";
$ali['age']=23;
$ali[]=6000;
$ali["3"]=6000;
$ali[]=6000;


$keys=[];
foreach ($ali as $c=> $v) {
$keys[]=$c;}
print_r($keys);
print ("test ");
$phrase=sprintf("je suis %s et j'ai %d ans",$ali['prenom'],$ali['age']);
echo "la phase est $phrase";
// echo  "test ",1,"<br>"
// $c=10+"10km";
echo "<p>c est $c</p>";
echo "<pre>";
print_r($ali);
echo "</pre>";
//create array with 3 integer
$array=[1,2,3];
//second one 
$array2=[4,5,2];
//find same values 
$sameValues=[...$array,...$array2];
//display results
print_r($sameValues);
//use foreach to display
foreach ($sameValues as $k => $v){
    if(is_int($v)){
        echo "$v "; 
        }else{
            print_r($v);
            }
            }
            ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>les tableaux en php </title>
</head>
<body>
    
</body>
</html>