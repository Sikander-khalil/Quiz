<?php
extract($_POST);
include 'users.php';
$addquiz = new users;
$qus = htmlentities($qus);
$option1 = htmlentities($op1);
$option2 = htmlentities($op2);
$option3 = htmlentities($op3);
$option4 = htmlentities($op4);
$array=[$option1,$option2,$option3,$option4];
$answer = array_search($ans,$array);
$query="INSERT INTO questions VALUES('','$qus','$option1','$option2','$option3','$option4','$answer','$cat')";
if($addquiz->add_quiz($query)){

    $addquiz->url("index.php?msg=run");

   
}

?>