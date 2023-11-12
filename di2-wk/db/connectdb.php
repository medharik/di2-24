<?php 

$cnx=mysqli_connect("localhost","root","","dbwk1");
mysqli_query($cnx,"insert into produit(libelle,prix) values ('hp dv8',9000)");



?>