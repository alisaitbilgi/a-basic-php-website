<?php
include("config.php");
session_start();
$error = '';
    if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['tel']) || empty($_POST['name'])) {
            header('Location: /register.php');
            echo "please enter all fields";
    }
    else
    {
        error_reporting(0);
        @ini_set('display_errors', 0);
        $login_name = $_POST['name'];
        $login_tel = $_POST['tel'];
        $login_username = $_POST['username'];
        $login_password = $_POST['password'];

        $conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO users (name, username, password, tel) VALUES ('$login_name', '$login_username', '$login_password', '$login_tel')";
        $result = mysqli_query($conn, $sql);
        header('Location: /login.php');
        $result->close();
    }
