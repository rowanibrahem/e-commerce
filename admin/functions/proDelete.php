<?php

$id= $_GET['id'];

require_once 'connect.php';
 $deletePro = "DELETE FROM products WHERE id= $id";

 if($conn -> query($deletePro)){

    header("location: ../products.php");
 }

?>