<?php 

// echo "<pre>";

// print_r($_POST);

$username = $_POST['username'];
$password = $_POST['password'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$priv = $_POST['priv'];
$gender = $_POST['gender'];

include ("connect.php"); 

$insertUser = "INSERT INTO users( username, password, address, phone, email, priv, gender) 
VALUES ('$username' , '$password' , '$address' , '$phone' , '$email' , '$priv' , '$gender')";

 $query = $conn -> query($insertUser);

 if($query){
    header("location: ../users.php");
 }
 else {
    echo $conn -> error;
 }
  ?>
 