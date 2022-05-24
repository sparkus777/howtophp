<?php
$servername = "localhost";
$username = "root";
$password = "123123";


$conn = mysqli_connect($servername, $username, $password);

$sql = 'DELETE FROM `blog_slavika`.`posts` WHERE `id` = '. $_GET['id'];
$result = mysqli_query($conn, $sql);
if (!$result) {
    var_dump(mysqli_error($conn));
} else {
    header('Location: /task4/index.php?message=deleted_post');
}