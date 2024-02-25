<?php 
extract($_POST);
include "Utils.class.php";
$ligne=Utils::checker($login,$passe);
// print_r($ligne);
// exit();
if ($ligne) {

    $_SESSION['login']=$ligne['login'];
    $_SESSION['passe']=$ligne['passe'];
    $_SESSION['prenom']=$ligne['prenom'];
    $_SESSION['id']=$ligne['id'];
    header("location:prive1.php");

} else {
   header("location:login.php?cn=no");
}


?>