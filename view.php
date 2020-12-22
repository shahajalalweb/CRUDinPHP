<?php
$id = $_GET['id'];
$connect = mysqli_connect('localhost', 'root', '', 'crud');
$sql = "SELECT * FROM users WHERE id = $id";
$reuslt = mysqli_query($connect, $sql);
$user = mysqli_fetch_assoc($reuslt);

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
            <a class="btn btn-primary" href="index.php">User list</a>
        </div>
        <!--user part-->
        <div class="col-md-9">
            <h1>Users Information</h1>
            <hr>
            <table class="table table-dark table-striped">
                <tr>
                    <th width="100" >Name : </th>
                    <td><?php echo $user['name'];?></td>
                </tr>
                <tr>
                    <th width="100" >Email : </th>
                    <td><?php echo $user['email'];?></td>
                </tr>
                <tr>
                    <th width="100" >Mobile : </th>
                    <td><?php echo $user['mobile'];?></td>
                </tr>
                <tr>
                    <th width="100" >Address : </th>
                    <td><?php echo $user['address'];?></td>
                </tr>
            </table>
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