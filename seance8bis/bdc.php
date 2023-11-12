<?php 
//3 extensions/driver  php ==>extensions ===>base de donnees
//  mysql_ OBSOLETE: - =>  , +=> facile
//mysqli_,oci,mssql : - => mono sgbd, securite ,  +=> plus facile
//PDO : -=> Difficile (besoin de  maitriser la POO),+=> multi-sgbdr , securite

$libelle=$_POST['lib'elle'];
$prix=$_POST['prix'];
$cnx=mysqli_connect("localhost","root","","dbase");



mysqli_query($cnx,"insert into produit(libelle,prix) values('n\'eail',$prix)") ;



?>