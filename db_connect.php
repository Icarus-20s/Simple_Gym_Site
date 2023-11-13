<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'Info';

    $conn = mysqli_connect($server, $username, $password, $db);
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }
?>





