<?php
include 'users.php';

$resgister = new users;
extract($_POST);
$img_name = $_FILES['img']['name'];
$tmp_name = $_FILES['img']['tmp_name'];
move_uploaded_file($tmp_name,"img/".$img_name);

$query = "INSERT INTO signup VALUES('','$n','$e','$p','$img_name')";
if($resgister->register($query)){

    $resgister->url("index.php?run=success");
}



?>