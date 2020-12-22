<?php
$id = $_GET['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];

$connect = mysqli_connect('localhost', 'root', '', 'crud');
$sql = "UPDATE users SET name='$name', email='$email', mobile='$mobile', address='$address' WHERE id=$id";
if (mysqli_query($connect, $sql)) {
    header("location: view.php?id=" . $id);
}else{
    echo 'Something worng!';
}



?>