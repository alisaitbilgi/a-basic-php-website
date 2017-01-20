<?php
error_reporting(0);
@ini_set('display_errors', 0);
include("config.php");
session_start();
$error = '';
    if (empty($_POST['username']) || empty($_POST['password'])) {
            header('Location: /login.php');
            $error = "Username or Password is invalid";    }
    else
    {

        $login_username = $_POST['username'];
        $login_password = $_POST['password'];

        $conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


        $sql = "select * from users where password ='$login_password' AND username='$login_username'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)){
            $_SESSION['user'] = $login_username;
            header('Location: /filter.php');
        }

        else{
            header('Location: /login.php');
            $error = "Username or Password is invalid";
        }

        $result->close();
    }
