<?php 
extract($_POST);
$cnx=mysqli_connect("localhost",'root','','db1');
$result=mysqli_query($cnx,"insert into produit(libelle,prix) values('$libelle',$prix)");
//redirection vers index.php
// header("location:index.php");
//code sql to add product?  
?   

?>

?>