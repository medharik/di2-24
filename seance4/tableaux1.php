<?php 
//tableaux : ensemble de valeurs + taille dynamique 
$t0=array();//tableau vide
$t1=array(1,5,100,-10);//tableau indexe de longueur : 4
$t0=[];//tableau vide
$t1=[19,5,100,"Samir"];//tableau indexe de longueur : 4
 $t1[4]="Safae";
unset($t1[3]);
$t1[1000]=900;
$t1[10]="salut";
$t1[]="";
$t1[]="Saad";
$t1[]="Saad";
// for ($i=0; $i <count($t1) ; $i++) { 
//  echo "<h3>$t1[$i]</h3>";
// }

foreach ($t1 as $c => $v) {
    echo "<p> $c est $v</p>";
}
// ?>
la longueur de ce tableau est : <?=count($t1)?>
<pre>
    <?php  print_r($t1);?>
</pre>