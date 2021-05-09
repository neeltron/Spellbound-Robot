<?php
$val = $_GET['val'];
$resp = "";
$link = mysqli_connect('*****', '*******', '**********', '************');
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO spells (spell) VALUES ($val)";
if (mysqli_query($link, $sql)) {
  $myObj->resp = $val;
  header("location: https://spellrobo.netlify.app/");
}
else {
  $myObj->resp = "Error";
}
$myJSON = json_encode($myObj);
echo $myJSON;
?>
