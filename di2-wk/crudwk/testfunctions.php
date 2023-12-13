<?php 
include_once "functions.php";
ajouter(12,8);
ajouter(120,80);
$tht=$calculer_total_ht(100,2);
$ttc=calcul_ttc($tht);
echo "ttc est $ttc";
echo "le ttc est ".calcul_ttc(calculer_total_ht(10,2));
$add(1,2);
?>