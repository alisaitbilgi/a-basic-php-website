<?php
error_reporting(0);
@ini_set('display_errors', 0);
session_start();
if(!isset($_SESSION["user"])){
  header('Location: login.php');
  exit();
}
if(!empty($_POST['id'])){
  include("config.php");
  $conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "DELETE from cars where id=" . $_POST['id'];

  if ($conn->query($sql) === TRUE) {
    header("Location: delete.php");
  } else {
    header("Location: delete.php");
  }
  $conn->close();
}
else {
  echo "Please enter an id to delete";
}
