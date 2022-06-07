<html>
<head>
    <title>edit post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/project/views/header.php'; ?>
</head>
<body>
<div class="container">
    <form action="/posts/update/" method="POST">
        <input type="hidden" name="id" value="<?php echo $post['id'] ?>">
        <div class="mt-5">
            <label class="form-label">Title</label>
            <input name="title" type="text" class="form-control" value = "<?php echo $post['title']?>">
        </div>
        <div class="mt-3">
            <label for="exampleFormControlTextarea1" class="form-label">Content</label>
            <textarea name="content" class="form-control" rows="3"><?php echo $post['content']?></textarea>
        </div>
            <div class="mt-3">
                <input class="btn btn-primary"" type="submit" value="Change">
            </div>
        </div>
    </form>
</div>
</body>
</html>