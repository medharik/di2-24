<?php 
//recuperer les ids envoyes via le lien :deletemultiple.php
if(isset($_POST['id']))
$ids=$_POST['id'];//retourner un tableau des id
// $ids=[1,25,17]; => (1,25,17)
// $t=implode(",",$ids);
// print_r($t);
$d="12:30:05";
$td=explode(":",$d);

print_r($td);
exit();
include_once "connexion.inc";
    $result=mysqli_query($cnx,"delete from produit where  id in ($t)");
// foreach ($ids as $k => $v) {
//     $result=mysqli_query($cnx,"delete from produit where  id=$v");
  
// }
header("location:index2.php?del=yes");

?>