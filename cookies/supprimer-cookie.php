<?php
if (isset($_COOKIE['prenom'])) {
    setcookie('prenom','',time()-1);
}
if (isset($_COOKIE['age'])) {
    setcookie('age',0,time()-1);
}
?>