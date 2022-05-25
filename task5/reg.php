<html>
<head>
    <title>reg form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
          crossorigin="anonymous">
    <link href="style.css">
</head>
<body>
<?php
//require 'connect.php';
//$conn = mysqli_connect('localhost', 'root', '123123','registration');
//if ($conn == false) {
//    echo 'error'. mysqli_connect_error() ;
//}
//    $username = $_POST['username'];
//    $password = $_POST['password'];
////var_dump($_POST);
//   $query = "INSERT INTO `registration`.`users` (`username`, `password`) VALUES ('$username', '$password');";
//   $result = mysqli_query($conn, $query);
//   //var_dump($result);
//
//if ($result == false) {
//    print("Произошла ошибка при выполнении запроса");
//}
//header('Location: /task5/index.php');
?>
    <div class="container">
        <form action="api/new_user.php" class="form-signin" method="POST">
            <h2>Registration</h2>
            <input type="text" name="username" class="form-control" placeholder="Username" required>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">accept</button>
        </form>
    </div>


</body>
</html>