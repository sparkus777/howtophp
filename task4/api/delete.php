<?php
/**
 * @var mysqli $conn
 */
require $_SERVER['DOCUMENT_ROOT'] . '/task4/db/db_connection.php';

$sql = 'DELETE FROM `blog_slavika`.`posts` WHERE `id` = '. $_GET['id'];
$result = mysqli_query($conn, $sql);
if (!$result) {
    var_dump(mysqli_error($conn));
} else {
    header('Location: /task4/index.php?message=deleted_post');
}