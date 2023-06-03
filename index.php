<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online examination System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <br>
    <br>
<div class="container">
    <div class="row">
    <div class="col-sm-12">
<div class="panel panel-danger">
    <div class="panel-heading">Online Quiz System</div>
    <div class="panel-body">Quiz System</div>

</div>
</div>
</div>
</div>
    
    
    <div class="container">
    <div class="row">
    <div class="col-sm-12">
  <h2>Panel Heading</h2>
  <div class="panel panel-info">
 
 <div class="panel-heading">Login form</div>
 <div class="panel-body">
  <?php  if(isset($_GET['run']) && $_GET['run'] == "failed"){

    echo "Your email and passsword is not correct";
  } ?>
  <form action="signin_sub.php" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="e">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="p">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  </div>
</div>
  </div>
 
<div class="col-sm-12">
  <div class="panel panel-info">
 <div class="panel-heading">Register form</div>
 <div class="panel-body">
    <?php
if(isset($_GET['run']) && $_GET['run'] == "success"){
echo '<h1>Your Register Successfully</h1>';

}
    ?>
  <form role="form" method="post" action="signup_sub.php" enctype="multipart/form-data">
  <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="n">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="e">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="p">
    </div>
    <div class="form-group">
      <label for="file">Upload your image:</label>
      <input type="file" class="form-control" id="file" name="img">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  </div>
</div>
</div>
</div>
</div>
</body>
</html>
