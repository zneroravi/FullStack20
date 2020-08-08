<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Students</title>
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
                    <li role="presentation"><a href="#">View Students</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">RegNo</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Profession</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
<?php 

$server   = "localhost";
$user = "root";
$pass = "";
$db = "lms";
$num ="1";

$sqlconn = new mysqli($server, $user, $pass, $db);

if ($sqlconn->connect_error){
    echo "error";
    die($sqlconn->connect_error);
} 
$sql = "SELECT * FROM userlogin;";

$data = $sqlconn->query($sql);


if ($data->num_rows>0) {
    while ($row = $data->fetch_assoc()) {
       // echo $row["email"]." ".$row["regno"]." ".$row["name"]." ".$row["mobile"]."<br/>";
      // $num;
?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $num++;?></th>
      <td><?php echo $row["regno"]; ?></td>
      <td><?php echo $row["name"]; ?></td>
      <td><?php echo $row["gender"]; ?></td>
      <td><?php echo $row["prof"]; ?></td>
      <td><?php echo $row["email"]; ?></td>
      <td><?php echo $row["mobile"]; ?></td>
      <td><a href="delstu.php?email=<?php echo $row["email"]; ?>"> <button type="button" class="btn btn-danger">Delete</button></a></td>
    </tr>
    <?php
        }

} else {
    echo "error: ".$sqlconn->error;
}

$sqlconn->close();
?>
  </tbody>
</table>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>