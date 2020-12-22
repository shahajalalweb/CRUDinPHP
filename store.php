<?php
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];

$connect = mysqli_connect('localhost', 'root', '', 'crud');
$sql = "INSERT INTO users VALUES(NULL , '$name', '$email', '$mobile', '$address' )";
if (mysqli_query($connect, $sql)) {
    $_SESSION['success'] = 1;
    header("location: index.php");
}else{
    $_SESSION['error'] = 1;
    header("location: insert.php");
}
?>