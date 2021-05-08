<?php
$val = $_GET['val'];
$link = mysqli_connect('localhost', '********', '*******', '*********');
if (!$link) {
  die("Connection failed!");
}
$sql = "INSERT INTO spells (spell) VALUES ($val)";
if (mysqli_query($link, $sql)) {
  echo "Success";
}
else {
  echo "Error";
}
?>
