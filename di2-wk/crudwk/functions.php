<?php 
//fonctions /modules/procedures :
// sous programme ayant un ROLE precis appele dans le programme principal (main)

function ajouter($a,$b) {//a et b sont des parametres / arguments
    
    $s=$a+$b;
    echo "la somme de $a et $b est $s<br>";
}

 $calculer_total_ht=function ($pu_ht,$qte){
    $tht=$pu_ht*$qte;
    // echo "le tht est ".$tht."<br>";
    return $tht;
};
function calcul_ttc($tht) {
    $ttc=$tht*1.20;
    return $ttc;
}

$add = function($a,$b){return $a+$b;};//fonction lambda
$add(1,2);
//closure
$t=[1,3,2,-1,9];
//$d=[2,4,6]
//closure //callback
$multiple=2;
$double=function($v) use(&$multiple){
    $multiple=3;
return $multiple*$v;
};
$d=array_map($double,$t);
echo "multiple est $multiple";
print_r($t);
print_r($d);
usort($t,function($a,$b){ if($a==$b) return 0; else return ($a<$b)? 1:-1;});
print_r($t)


?>