<?php 
// les extentions qui permettent au php de communiquer avec une base de donnees :
// mysql, -=>obsolete, + => facile
// mysqli,oci,mssql, sql_srv -=> SECURITE, MONO SGBDR , +=> facile 
// pdo : - => difficile, necessite une connaissance de la POO. +=> SECURITE, MULTI-SGBDR  
$connection=mysqli_connect("localhost","root","","dbase") ;
// $connection2=mysqli_connect("localhost","root","","dbasefhfhg");
mysqli_query($connection,"insert into produit(libelle,prix) values('acer a7',7500)") ;

?>