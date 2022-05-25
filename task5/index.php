<html>
<head>
    <title>Task 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
          crossorigin="anonymous">
    <link href="style.css">
</head>
<body>
    <div class="container">
        <form action="auth.php" class="form-signin" method="POST">
            <h2>Main page</h2>
            <input type="text" name="username" class="form-control" placeholder="Username" required>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign IN</button>
            <a class="btn btn-lg btn-primary btn-block" href="reg.php" type="button">Register</a>
        </form>
    </div>


</body>
</html>