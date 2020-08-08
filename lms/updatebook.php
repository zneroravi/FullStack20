<?php

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Books</title>
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
                    <li role="presentation"><a href="book.php">Books</a></li>
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
    <form action="updatef.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Book Name</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Book Name" name="book">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Author</label>
      <input type="text" value="<?php ?>" class="form-control" id="inputPassword4" placeholder="Author" name="author">
    </div>
  </div>
  <div class="form-group col-md-6">
      <label for="inputEmail4">Publication</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Publication" name="publication">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Price</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Price" name="price">
    </div>
  </div>
  <div class="form-group col-md-6">
      <label for="inputPassword4">Year</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Year" name="year">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Cat</label>
      <select id="inputState" class="form-control" name="cat">
        <option selected>Choose...</option>
        <option value="tech">Technology</option>
        <option value="science">Science</option>
        <option value="gk">GK</option>
        <option value="story">Story</option>
        <option value="fic">Fiction</option>
      </select>
    </div><br/>

    
  &nbsp;&nbsp;&nbsp;<button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>