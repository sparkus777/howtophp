<?php
$conn = mysqli_connect('localhost', 'root', '123123', 'registration');
if ($conn == false) {
    echo 'error' . mysqli_connect_error();
}
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE `username` = '$username' AND `password` = '$password'";

$result = mysqli_query($conn, $query);
//var_dump($result);
if ($row = mysqli_fetch_assoc($result)) {
    echo 'all good';
}
else {
    echo 'user not found';
}