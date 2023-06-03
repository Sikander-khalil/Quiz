<?php
include 'users.php';

$ans = new users;
$allans = $ans->answer($_POST);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answers</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <style>
        .allanswers{

            background: red;
            color: white;
        }
    </style>
</head>
<body>
    <div class="allanswers">
   <center>
    
  <!--  <h2>Right: <?php // echo $allans['right'];  ?></h2>
   <h2>Wrong: <?php  //echo $allans['wrong'];  ?></h2>
   <h2>No Answer: <?php  //echo $allans['no_answer'];  ?></h2> -->
<?php
$total_question = $allans['right'] + $allans['wrong'] + $allans['no_answer'];

$attempt_question =  $allans['right'] + $allans['wrong'];

?>

   <div class="container">

   <div class="col-sm-2"></div>
   <div class="col-sm-8"></div>
  <h2>Quiz Result</h2>
                       
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Total No of Questions</th>
        <th><?php  echo $total_question; ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Attempt Questions</td>
        <td><?php  echo $attempt_question;  ?></td>
      </tr>
      <tr>
        <td>Right Answer</td>
        <td><?php echo $allans['right'];  ?></td>
      </tr>
      <tr>
        <td>Wrong Answer</td>
        <td><?php echo $allans['wrong'];  ?></td>
      </tr>
      <tr>
        <td>No Answer</td>
        <td><?php echo $allans['no_answer']; ?></td>
      </tr>
      <tr>
        <td>Your Result</td>
        <td><?php
        
        $per = ($allans['right']*100)/($total_question); 
        echo $per."%";
        
        
        
        ?></td>
      </tr>
    </tbody>
  </table>
    </div>
    <div class="col-sm-2"></div>
</div>






</center> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</div>
</body>
</html>