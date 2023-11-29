<?php 
//recuperer les ids  depuis le form post
$ids = $_POST['id'];//[1,55,7]  
print_r($ids);
$string_id=implode(",",$ids);
// echo $string_id;

// print_r($ids);
// exit();  
//connexion bd
$cnx = mysqli_connect("localhost", "root", "", "dbrevision1");
$result = mysqli_query($cnx, " delete from produit where id in ($string_id)");

// envoyer la requete  (query sql ) 
// foreach ($ids as $k => $v) {
    
    // $result = mysqli_query($cnx, " delete from produit where id=$v");
// }
//redirection vers la page liste.php
header('Location:liste.php');
?>