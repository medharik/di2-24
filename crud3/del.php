<?php 
$id=$_GET['id'];


include_once "connect.php";
$result=mysqli_query($cnx,"delete from produit where id=$id");
header("location:liste.php");

?>