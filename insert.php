<?php
$connect = mysqli_connect('localhost', 'root', '', 'crud');
$sql = "SELECT * FROM users";
$reuslt = mysqli_query($connect, $sql);


?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>CRUD in PHP</title>
</head>
<body>
<br><br><br><br>


<!--part 1-->
<div class="container">
    <div class="row">
        <!--new user part-->
        <div class="col-md-3">
            <a class="btn btn-primary" href="index.php">Users list</a>
        </div>
        <!--from part-->
        <div class="col-md-9">
            <!--alert-->
            <?php if (isset($_SESSION['error'])) { ?>
                <div class="alert alert-warning" role="alert">
                    Something worng!
                </div>
            <?php } ?>
            <h1>Add new Users</h1>
            <hr>
            <form action="store.php" method="POST">
                <div class="form-group">
                <label for="name">UserName :</label>
                    <input required type="text" class="form-control" name="name" placeholder="UserName">
                </div>
                <div class="form-group">
                    <label for="email">Email Address :</label>
                    <input required type="email" class="form-control" name="email" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile :</label>
                    <input required type="text" class="form-control" name="mobile" placeholder="mobile number">
                </div>
                <div class="form-group">
                    <label for="address">Address :</label>
                    <input type="text" class="form-control" name="address" placeholder="Address">
                </div>
                <br><br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>