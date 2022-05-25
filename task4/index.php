<?php
/**
 * @var mysqli $conn
 */
require $_SERVER['DOCUMENT_ROOT'] . '/task4/db/db_connection.php';
$sql = "SELECT id, title, content, date_created FROM blog_slavika.posts";
$result = mysqli_query($conn, $sql);
$posts = [];

while ($row = mysqli_fetch_assoc($result)) {
    $posts[] = $row;
}
?>
<html>
<head>
    <title>Task 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/task4/templates/header.php'; ?>
<div class="container">
    <?php if (!empty($_GET['message'])) { ?>
    <div class="alert alert-success" role="alert">
        <?php echo $_GET['message']; ?>
    </div>
    <?php } ?>
    <?php foreach ($posts as $post) { ?>
        <div class="card mt-5 25">
            <h5 class="card-header"><?php echo $post['title'] ?></h5>
            <div class="card-body">
                <p class="card-text"><?php echo $post['content']?></p>
            </div>
            <div class="card-footer">
                <p class="card-text"><?php echo $post['date_created']?></p>
            </div>
            <a class="btn btn-danger" href="api/delete.php?id=<?php echo $post['id'] ?>">Удалить</a>
            <a class="btn btn-warning" href="update_post.php?id=<?php echo $post['id'] ?>">Изменить</a>

        </div>
    <?php } ?>
</div>
</body>
</html>