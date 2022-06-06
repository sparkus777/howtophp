<html>
<head>
    <title>Task 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
        <div class="card mt-5 25">
            <a href="posts/<?= $post['id'] ?>"><h5 class="card-header"><?= $post['title'] ?></h5></a>
            <div class="card-body">
                <p class="card-text"><?= $post['content']?></p>
            </div>
            <div class="card-footer">
                <p class="card-text"><?= $post['date_created']?></p>
            </div>
        </div>
</div>
</body>
</html>