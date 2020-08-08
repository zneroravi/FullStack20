<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Library< - Books</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="dashlib.php">Library management system</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-left">
                    <li role="presentation"><a href="#">Books</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-left">
                    <li role="presentation"><a href="stuview.php">Students</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-left">
                    <li role="presentation"><a href="Fine.php">Fine</a></li>
                </ul>
            </div>
        </div>
    </nav>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href="addbook.html"><button type="button" class="btn btn-warning" > + Add Book</button></a> 
    &nbsp;<a href="book.php"><button type="button" class="btn btn-info">Refresh</button></a>
    <br/><br/><br/>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Book Name</th>
      <th scope="col">Author</th>
      <th scope="col">Publication</th>
      <th scope="col">Price</th>
      <th scope="col">Cat</th>
      <th scope="col">Year</th>
      <th scope="col">Book Added</th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php 

$server   = "localhost";
$user = "root";
$pass = "";
$db = "lms";


$sqlconn = new mysqli($server, $user, $pass, $db);

if ($sqlconn->connect_error){
    echo "error";
    die($sqlconn->connect_error);
} 
$sql = "SELECT * FROM books;";

$data = $sqlconn->query($sql);


if ($data->num_rows>0) {
    while ($row = $data->fetch_assoc()) {
       // echo $row["email"]." ".$row["regno"]." ".$row["name"]." ".$row["mobile"]."<br/>";
      // $num;
?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row["bookid"]; ?></th>
      <td><?php echo $row["bookname"]; ?></td>
      <td><?php echo $row["author"]; ?></td>
      <td><?php echo $row["publication"]; ?></td>
      <td><?php echo $row["price"]; ?></td>
      <td><?php echo $row["year"]; ?></td>
      <td><?php echo $row["cat"]; ?></td>
      <td><?php echo $row["time"]; ?></td>
      <td><a href="updatebook.php?book=<?php echo $row["bookid"]; ?>"><button type="button" class="btn btn-success">Update</button></td>

      <td><a href="delbook.php?book=<?php echo $row["bookid"]; ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>

    </tr>
  </tbody>
      <?php
        }

} else {
    echo "error: ".$sqlconn->error;
}

$sqlconn->close();
?>
</table>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>