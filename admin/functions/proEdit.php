<?php
require 'connect.php';
$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$sale = $_POST['sale'];
$category = $_POST['category'];

// if(empty($password)){
//    $pass = $password;
//    $updatepass = "UPDATE users set password= '$pass' WHERE id='$id'  ";
//    $conn -> query($updatepass);
// }


$updatePro= "UPDATE products set name = '$name' , price = '$price', sale = '$sale',  cat_id = '$category'  WHERE id='$id' ";
$query = $conn -> query($updatePro);


if($query){
    header("location: ../products.php");
 }
 else {
    echo $conn -> error;
 }
?>