<?php
include 'connect.php';

// 1st sql to fetch the id of the state
$sql = "SELECT `name` FROM `world`.`states` WHERE `country_id` = 101;";

// making query using sql
$getState = $mysql->query($sql);

// checking the number of obtained items 
if ($getState->num_rows > 0) {
  while ($row = $getState->fetch_assoc()) {
    echo '<option value="' . $row['name'] . '">';
  }
} else {
  echo "<h3>query failed </h3>";
}

// closing mysql connection
$mysql->close();
