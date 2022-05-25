<?php
$connection = mysqli_connect('localhost', 'root', '123123');
$select_db = mysqli_select_db( $connection, 'registration.users');


    $query = "SELECT * FROM registration.users ";
    $result = mysqli_query($connection, $query);
    var_dump($_POST);
