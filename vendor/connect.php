<?php

    $connect = mysqli_connect('localhost', 'root', '', 'testdb');

    if (!$connect) {
        die('Error connect to DataBase');
    }

?>
