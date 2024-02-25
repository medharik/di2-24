<?php 
extract($_POST);
$reponse=checker($login,$passe);
if ($reponse==true) {
    session_start();
    $_SESSION['login']=$login;
    $_SESSION['passe']=$passe;
    

    //vers vip.php
    header("location:vip.php");
}else{
    header("location:login.php?cn=no");
}

?>