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
require 'connect.php';
$connection = mysqli_connect('localhost', 'root', '123123');
$select_db = mysqli_select_db( $connection, 'registration.users');
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO registration.users(username, password) VALUES ('$username','$password')";
    $result = mysqli_query($connection, $query);

    if ($result){
        $smsg = "Reg success";
        header('Location: /task5/index.php');
        } else {
        $fmsg = "error";
    }
}
?>
    <div class="container">
        <form class="form-signin" method="POST">
            <h2>Registration</h2>
            <?php if (isset($smsg)){ ?><div class="alert alert-success" role="alert"><?php echo $smsg;?> </div><?php } ?>
            <?php if (isset($fmsg)){ ?><div class="alert alert-danger" role="alert"><?php echo $fmsg;?> </div><?php } ?>
            <input type="text" name="username" class="form-control" placeholder="Username" required>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">accept</button>
        </form>
    </div>


</body>
</html>