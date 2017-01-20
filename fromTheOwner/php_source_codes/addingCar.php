<?php
error_reporting(0);
@ini_set('display_errors', 0);
session_start();
if(!isset($_SESSION["user"])){
  header('Location: login.php');
  exit();
}
if(!empty($_POST['add']) && !empty($_POST['brand']) &&
  !empty($_POST['model']) && !empty($_POST['year']) &&
  !empty($_POST['category']) && !empty($_POST['price'])){

  include("config.php");
  $conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $brand = $_POST['brand'];
  $model = $_POST['model'];
  $year = $_POST['year'];
  $category = $_POST['category'];
  $price = $_POST['price'];
  $sql = "INSERT INTO cars (brand, model, year, category, price) VALUES ('$brand', '$model', $year, '$category', $price)";


  if ($conn->query($sql) === TRUE) {
    header("Location: add.php");
  } else {
    header("Location: add.php");
  }
  $conn->close();
}
else {
  echo "PLEASE FILL ALL THE FIELDS";
}
?>
