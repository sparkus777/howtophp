<?php
$servername = "localhost";
$username = "root";
$password= "123123";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

$sql = "SELECT id, title, content, date_created FROM blog_slavika.posts WHERE id= ". $_GET['id'];
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<html>
<head>
    <title>Task 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-start">
            <a href="index.php?message=from_home" class="navbar-brand d-flex">
                <strong>Home</strong>
            </a>
            <a href="new_post.php" class="navbar-brand d-flex">
                <strong>Create</strong>
            </a>
        </div>
    </div>
</header>
<div class="container">
    <form action="api/update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
        <div class="mt-5">
            <label class="form-label">Title</label>
            <input name="title" type="text" class="form-control" value = "<?php echo $row['title']?>">
        </div>
        <div class="mt-3">
            <label for="exampleFormControlTextarea1" class="form-label">Content</label>
            <textarea name="content" class="form-control" rows="3"><?php echo $row['content']?></textarea>
        </div>
        <div class="mt-3">
            <input class="btn btn-primary" type="submit" value="Change">
        </div>
    </form>
</div>
</body>
</html>