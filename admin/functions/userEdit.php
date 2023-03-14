<?php
require 'connect.php';
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$priv = $_POST['priv'];
$gender = $_POST['gender'];

if(empty($password)){
   $pass = $password;
   $updatepass = "UPDATE users set password= '$pass' WHERE id='$id'  ";
   $conn -> query($updatepass);
}


$updateUser = "UPDATE users set username = '$username' , password = '$password', address = '$address', phone = '$phone', email = '$email',
 priv = '$priv', gender = '$gender' WHERE id='$id' ";
$query = $conn -> query($updateUser);


if($query){
    header("location: ../users.php");
 }
 else {
    echo $conn -> error;
 }
?>