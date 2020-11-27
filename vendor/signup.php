<?php

    session_start();
    require_once 'connect.php';

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $id_role = $_POST['id_role'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    

    if ($password != $password_confirm) {
        echo "Пароли не совпадают";
        exit();
    } else if(mb_strlen($first_name) < 2 || mb_strlen($first_name) > 30) {
        echo "Недопустимая длина имени";
        exit();
    }else if(mb_strlen($last_name) < 2 || mb_strlen($last_name) > 30) {
        echo "Недопустимая длина фамилии";
        exit();
    }else if(mb_strlen($password) < 2 || mb_strlen($password) > 15) {
        echo "Недопустимая длина пароля (от 2 до 15 символов)";
        exit();    
    } else {
        $path = 'uploads/' . time() . $_FILES['image']['name'];
        if (!move_uploaded_file($_FILES['image']['tmp_name'], '../' . $path)) {
            echo 'Ошибка при загрузке сообщения';
        }

        mysqli_query($connect,"INSERT INTO `users` (`first_name`, `last_name`, `id_role`, `password`, `image`) 
            VALUES ('$first_name', '$last_name', '$id_role', '$password',       '$path')");
        echo 'Регистрация прошла успешно!';
        header('Location: ../index.php');
    }
?>