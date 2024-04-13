<?php
    $connect = mysqli_connect('127.0.0.1', 'root', '', 'registration');

    if (!$connect) {
        die('Error connect to DataBase');
    }
