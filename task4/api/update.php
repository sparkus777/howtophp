<?php
/**
 * @var mysqli $conn
 */
require $_SERVER['DOCUMENT_ROOT'] . '/task4/db/db_connection.php';

$sql = "UPDATE blog_slavika.posts SET title = '" . $_POST['title'] . "', content = '" . $_POST['content'] . "', date_created = NOW() WHERE id =". $_POST['id'] ;
$result = mysqli_query($conn, $sql);
if (!$result) {
    var_dump(mysqli_error($conn));
} else {
    header('Location: /task4/index.php?message=new_post');
}