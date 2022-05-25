<?php

function isUserAuthorized() : bool
{
    global $conn;
    // 1. Take the value of cookie with name "userid"
    if (empty($_COOKIE['userid'])) {
        return false;
    }
    // 2. Select all data from DB from table users where id = cookie "user id"
    $sql = "SELECT * FROM blog_slavika.users WHERE id = " . $_COOKIE['userid'];
    $result = mysqli_query($conn, $sql);
    $user = [];
    if ($row = mysqli_fetch_assoc($result)) {
        $user = $row;
    }
    // 3. If hash of "username,password" equal to value of cookie named "auth"
    // we tell to system that user is logged as {{ username }}
    $hashFromDB = password_hash($user['username'] . ',' . $user['password'], PASSWORD_BCRYPT, ['salt' => 'qwertyqwertyqwertyqwer']);

    if ($hashFromDB === $_COOKIE['auth']) {
        return true;
    }

    // 4. If it is not equal, than we need to redirect user to main page with error and delete cookie from client
    setcookie('userid', "", ['expires' => time() - 3600, 'path' => '/']);
    setcookie('auth', "", ['expires' => time() - 3600, 'path' => '/']);
    return false;
}

function getUsernameByIdFromCookie()
{
    global $conn;
    $sql = "SELECT * FROM blog_slavika.users WHERE id = " . $_COOKIE['userid'];
    $result = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_assoc($result)) {
        return $row['username'];
    }

    return false;
}