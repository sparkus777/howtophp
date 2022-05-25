<?php
/**
 * @var mysqli $conn
 */
require $_SERVER['DOCUMENT_ROOT'] . '/task4/db/db_connection.php';
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT, ['salt' => 'qwertyqwertyqwertyqwer']);
$query = "INSERT INTO `blog_slavika`.`users` (`username`, `password`) VALUES ('$username', '$password');";
$result = mysqli_query($conn, $query);

if ($result == false) {
    print("Произошла ошибка при выполнении запроса");
    header('Location: /task4/registration.php');
} else {
    header('Location: /task4/login.php');
}
