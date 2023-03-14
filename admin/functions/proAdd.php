<?php 

// echo "<pre>";

// print_r($_POST);

require_once 'connect.php';
echo "<pre>";
$name = $_POST['name'];
$price = $_POST['price'];
$sale = $_POST['sale'];
$category = $_POST['category'];
//  die(print_r($_FILES));
$imageName = $_FILES ['img']['name']; 
$temp = $_FILES['img']['tmp_name'];


if($_FILES['img']['error']==0){
   $extensions = ['jpg' , 'jpeg' , 'gif' , 'png' , 'webp'];
   $ext = pathinfo($imageName , PATHINFO_EXTENSION);
   if (in_array($ext , $extensions)){
    if($_FILES['img']['size']< 2000000){
    $newName = md5(uniqid()).'.' . $ext;
   echo("$newName");
     move_uploaded_file($temp, '../images/' .$newName);
    }else {
      echo "file size is too big";
    }
   }else {
      echo "this extension isn't allowed";
   }

}else {
   echo "you must upload image";
}



$inser = "INSERT INTO products( name ,  price ,  sale ,  cat_id , img) 
VALUES ('$name' , '$price' , '$sale' , '$category' , '$newName' )";

$query = $conn -> query($inser);

 if($query){
    header("location: ../products.php"); 
 }
 else {
    echo $conn -> error;
 }
  ?>
 