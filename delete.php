<?php
$id = $_GET['id'];

$connect = mysqli_connect('localhost', 'root', '', 'crud');
$sql = "DELETE FROM users WHERE id = $id";

 if (mysqli_query($connect, $sql)) {
    header("location: index.php");
 }else {
     echo 'Not Deleted User!';
 }


?>