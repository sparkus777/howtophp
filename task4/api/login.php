<?php
/**
 * @var mysqli $conn
 */
require $_SERVER['DOCUMENT_ROOT'] . '/task4/db/db_connection.php';
$salt = 'qwertyqwertyqwertyqwer';
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT, ['salt' => $salt]);

$query = "SELECT * FROM blog_slavika.users WHERE `username` = '$username' AND `password` = '$password'";
$result = mysqli_query($conn, $query);
if ($row = mysqli_fetch_assoc($result)) {
    // 1. password_hash() for "admin,123"
    $hash = password_hash($row['username'] . ',' . $row['password'], PASSWORD_BCRYPT, ['salt' => $salt]);
    // 2. Send cookie "userid" with id of user
    setcookie('userid', $row['id'], ['path' => '/']);
    // 3. Send cookie with hash from step 1 to cookie name "auth"
    setcookie('auth', $hash, ['path' => '/']);
    header('Location: /task4/index.php?message=log_in_successfully');
}
else {
    // 1. Return to login.php with message "User or login not correct"
    header('Location: /task4/login.php?message=user_or_login_not_correct');
}