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
                    <li role="presentation"><a href="logout.php">Logout</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="stuprofile.php">View Profile</a></li>
                </ul>
               
            </div>
        </div>
    </nav>

<h1>Welcome <?php  echo $name;?></h1>

<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
  <div class="card-header">Books Count</div>
  <div class="card-body">
    <h5 class="card-title">50</h5>
    <p class="card-text">Book Quote.</p>
  </div>
</div>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Book Name</th>
      <th scope="col">Author</th>
      <th scope="col">Date of Issue</th>
      <th scope="col">Days</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td><button type="button" class="btn btn-info">Return</button></td>
    </tr>
</tbody>
</table>
<?php

?>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: <?php echo $bar; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="7">days Left</div>
</div>



    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>