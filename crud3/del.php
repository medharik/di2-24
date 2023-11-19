<?php 
$id=$_GET['id'];
$cnx=mysqli_connect("localhost",'root','','db1');
$result=mysqli_query($cnx,"delete from produit where id=$id");
header("location:liste.php");

?>