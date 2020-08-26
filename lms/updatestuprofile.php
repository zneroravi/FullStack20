<?php 
session_start();
$email = $_SESSION['email'];

include 'userdata.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Student</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">Library management system</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-left">
                    <li role="presentation"><a href="allbook.php">Books</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="login.html">Logout</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="stuprofile.php">View Profile</a></li>
                </ul>
               
            </div>
        </div>
    </nav>

<form action="updatestudef.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Registration Number</label>
      <input type="text" class="form-control" id="inputEmail4" value="<?php echo $regno; ?>" placeholder="Book Name" name="book" readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Name</label>
      <input type="text" value="<?php echo $name; ?>" class="form-control" id="inputPassword4" placeholder="Author" name="author">
    </div>
  </div>
  <div class="form-group col-md-6">
      <label for="inputEmail4">Gender</label>
      <input type="text" class="form-control" value="<?php echo $gender; ?>" id="inputEmail4" placeholder="Publication" name="publication" readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Prof</label>
      <input type="text" class="form-control" value="<?php echo $prof; ?>" id="inputEmail4" placeholder="Publication" name="publication">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Mobile Number</label>
      <input type="text" class="form-control" value="<?php echo $mobile; ?>" id="inputEmail4" placeholder="Publication" name="publication">
    </div>
<button type="button" class="btn btn-danger">Update Details</button>
</form>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>