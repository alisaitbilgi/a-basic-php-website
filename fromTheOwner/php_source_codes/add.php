<?php
session_start();
if(!isset($_SESSION["user"])){
	header('Location: login.php');
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>CENG-388 WEB PROGRAMMING</title>
<link rel="stylesheet" type="text/css" href="styleHome.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div class="container">
    <img src="img2.jpg" />
	<img src="img.jpg" />
	<div class="navbar">
	    <ul class="navbar-nav">
	      <li><a href="add.php" class="active">ADD VEHICLE</a></li>
	      <li><a href="delete.php" class="active">DELETE VEHICLE</a></li>
	      <li><a href="filter.php" class="active">FILTER VEHICLES</a></li>
 		  <li><a href="logout.php" class="active">LOG OUT</a></li>
		</ul>
	</div>
	<div class="sidebar">
		<p id="side_p">ADDING OPTIONS</p>
		<form class="form" action="addingCar.php" method="POST" autocomplete="off">
			<label class="label">BRAND:</label><input name="brand" class="dataInput" type="text" placeholder="BRAND">
			<label class="label">MODEL:</label><input name="model" class="dataInput" type="text" placeholder="MODEL">
			<label class="label">YEAR:</label><input name="year"  class="dataInput" type="text" placeholder="YEAR">
			<label class="label">CATEGORY:</label><input class="dataInput" name="category" type="text" placeholder="CATEGORY">
			<label class="label">PRICE:</label><input name="price" class="dataInput" type="text" placeholder="PRICE">
			<button style="margin-top:40px" name="add" type="submit" class="buton" value="add">ADD</button>
		</form>
	</div>
	<div class="content">
		<p id="table_p">VEHICLE INFORMATIONS TABLE</p>
		<table class="striped">
			<thead id="thead">
				<th>ID</th>
				<th>BRAND</th>
				<th>MODEL</th>
				<th>YEAR</th>
				<th>CATEGORY</th>
				<th>PRICE(TL)</th>
				<?php
				error_reporting(0);
 		       @ini_set('display_errors', 0);
				include("config.php");
				$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				$sql = "SELECT * FROM cars";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
								echo "<tr><td>".$row["id"]."</td><td>".$row["brand"]."</td><td>".$row["model"]."</td><td>".$row["year"]."</td><td>".$row["category"]."</td><td>".$row["price"]."</td></tr>";
						}
				}
				$conn->close();
				 ?>
			</thead>
		</table>
	</div>
	<div class="footer">
		<p id="footer">WELCOME TO MY WEB PROGRAMMING PROJECT</p>
	</div>
	</div>
	</body>
	</html>
