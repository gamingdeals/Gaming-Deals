<!DOCTYPE html>
<html>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $price = $_POST['price'];
  $image = $_POST['image'];
  $link = $_POST['link'];

  // Database connection
  $servername = "localhost";
  $username = "root";
  $password = "hichem2025";
  $dbname = "gamingdeals";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Insert query
  $sql = "INSERT INTO game (name, price, image, link) VALUES ('$name', '$price', '$image', '$link')";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
}
?>
<form method="post" action="">
  <label for="id">Game ID:</label>
  <input type="text" name="id">
  <label for="name">Game Name:</label>
  <input type="text" name="name">
  <label for="price">Price:</label>
  <input type="text" name="price">
  <label for="image">Image URL:</label>
  <input type="text" name="image">
  <label for="link">Game Link:</label>
  <input type="text" name="link">
  <input type="submit" value="Submit">
</form>
<?php

?>
</body>
</html>