<?php
session_start();
$connect = mysqli_connect('localhost', 'root', '', 'crud');
$sql = "SELECT * FROM users ORDER BY id desc";
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
            <a class="btn btn-primary" href="insert.php">New User</a>
        </div>
        <!--user part-->
        <div class="col-md-9">
            <!--alert-->
            <?php if (isset($_SESSION['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    Success added!
                </div>
            <?php }?>
            <h1>Users List</h1>
            <hr>
            <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($reuslt)) {?>
                <tr>
                    <th scope="row"><?php echo $row['id'];?></th>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td>
                        <a class="btn btn-info" href="view.php?id=<?php echo $row['id'];?>">View</a>
                        <a class="btn btn-primary" href="edit.php?id=<?php echo $row['id'];?>">Edit</a>
                        <a class="btn btn-danger" onclick="return confirm('Are you sure!')" href="delete.php?id=<?php echo $row['id'];?>">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
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
<?php unset($_SESSION['success']); ?>