<?php 
//recuperer tous les produits de la base de donnees
$cnx=mysqli_connect("localhost","root","","dbase");
if($cnx){
   $resultat= mysqli_query($cnx," select * from produit");
// print_r($resultat->num_rows);
}

// while ($produit=$resultat->fetch_assoc()) {
//     echo "<h2>".$produit['id']."</h2>";}

?>
