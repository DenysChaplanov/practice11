<?php

    session_start();
    require_once 'connect.php';

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $password = $_POST['password'];

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `first_name` = '$first_name' AND 
        `last_name` = '$last_name' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "first_name" => $user['first_name'],
            "last_name" => $user['last_name'],
            "image" => $user['image'],
            "id_role" => $user['id_role']
        ];

        header('Location: ../profile.php');

    } else {
        echo 'Не верный данные или пароль';
        exit();
    }
    ?>

