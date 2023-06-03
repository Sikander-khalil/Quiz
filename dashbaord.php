<?php

include 'users.php';
$cat = new users;
$category = $cat->cat_shows();



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <h2>Dashboard</h2>

       <?php

if(isset($_GET['msg']) && !empty($_GET['msg'])){

     echo "<p>Data Inserted successfully</p>";
}

?>
    <div id="quiz-form">
        <form action="add_quiz.php" method="post">

            <div class="form-group">
                <label for="text">Question:</label>
                <input type="text" class="form-control" name="qus" placholder="Enter Questions">

            </div>
            <div class="form-group">
                <label for="text">option-1</label>
                <input type="text" class="form-control" name="op1" placholder="Enter Option 1">

            </div>
            <div class="form-group">
                <label for="text">option-2</label>
                <input type="text" class="form-control" name="op2" placholder="Enter Option 2">

            </div>
            <div class="form-group">
                <label for="text">option-3</label>
                <input type="text" class="form-control" name="op3" placholder="Enter Option 3">

            </div>
            <div class="form-group">
                <label for="text">option-4</label>
                <input type="text" class="form-control" name="op4" placholder="Enter Option 4">

            </div>
            <div class="form-group">
                <label for="text">answer:</label>
                <input type="text" class="form-control" name="ans" placholder="Enter Answer">

            </div>

            <div class="form-group">

                <select class="form-control" id="sell" name="cat">
                    <option value="">Choose category</option>
                    

   <?php

       foreach($category as $c){
         echo "<option value=".$c['id'].">".$c['cat_name']."</option>";

       }
     

        ?>

                </select>

            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>



</body>

</html>