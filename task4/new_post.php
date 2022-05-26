<html>
<head>
    <title>Task 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/task4/db/db_connection.php';?>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/task4/templates/header.php'; ?>

<div class="container">
    <form action="api/create.php" method="POST">
        <div class="mt-5">
            <label class="form-label">Title</label>
            <input name="title" type="text" class="form-control" >
        </div>
        <div class="mt-3">
            <label for="exampleFormControlTextarea1" class="form-label">Content</label>
            <textarea name="content" class="form-control" rows="3"></textarea>
        </div>
        <div class="mt-3">
            <input class="btn btn-primary" type="submit" value="Создать">
        </div>
    </form>
</div>
</body>
</html>