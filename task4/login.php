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
    <form action="api/login.php" class="form-signin" method="POST">
        <h2>Login</h2>
        <input type="text" name="username" class="form-control" placeholder="Username" required>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign IN</button>
    </form>
</div>
</body>
</html>