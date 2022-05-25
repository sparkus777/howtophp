<?php
$conn = mysqli_connect('localhost', 'root', '123123','registration');
if ($conn == false) {
    echo 'error'. mysqli_connect_error() ;
}
$username = $_POST['username'];
$password = $_POST['password'];
//var_dump($_POST);
$query = "INSERT INTO `registration`.`users` (`username`, `password`) VALUES ('$username', '$password');";
$result = mysqli_query($conn, $query);
//var_dump($result);

if ($result == false) {
    print("Произошла ошибка при выполнении запроса");
}
header('Location: /task5/index.php');