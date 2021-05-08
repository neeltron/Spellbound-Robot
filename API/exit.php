<?php 
$link = mysqli_connect('localhost', '********', '*********', '**********');
$sql = "SELECT * from spells order by id desc limit 1";
$result_side = mysqli_query($link, $sql);
$resp1 = "";
$resp2 = "";
if (mysqli_num_rows($result_side) > 0) {
    while($row = mysqli_fetch_assoc($result_side)) {
        echo $row['spell'];
    }
}
?>