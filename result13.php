<?php

if (isset($_POST['submit'])){

$name = $_POST['name'];
$fname = $_POST['fname'];
$age = $_POST['age'];
$email = $_POST['email'];
$city = $_POST['city'];
$password = $_POST['pass'];
//echo "$name <br/> $fname <br/> $age <br/> $email <br/> $city <br/> $password<br/>";
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Form Output</title>
  </head>
  <body>
    <h1>Form Output</h1>
    <form action="result13.php"  method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="name" class="form-control" id="inputEmail4" name="name" value="<?php echo $name; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Father Name</label>
      <input type="text" class="form-control" id="inputPassword4" name="fname" value="<?php echo $fname; ?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Age</label>
      <input type="text" class="form-control" id="inputEmail4" name="age" value="<?php echo $age; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Email</label>
      <input type="email" class="form-control" id="inputPassword4" name="email" value="<?php echo $email; ?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">city</label>
      <input type="text" class="form-control" id="inputEmail4" name="city" value="<?php echo $city; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="text" class="form-control" id="inputPassword4" name="pass" value="<?php echo $password ?>">
    </div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">LOCKED</button>
</form>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>