<?php
include 'connect.php';

$state_value = $_POST['state_value'];   // the value of #state input given by jquery 
// 1st sql to fetch the id of the state
$sql = "SELECT `id` FROM `world`.`states` WHERE `name` = '$state_value';";

// making query using sql
$state = $mysql->query($sql);

// checking the number of obtained items 
if ($state->num_rows > 0) {
  $state_id = $state->fetch_row();
} else {
  echo '<option value="Query failed">';
}

// 2nd sql to fetch the id of the state
$sql = "SELECT `id`, `name` FROM `world`.`cities` WHERE `state_id` = $state_id[0];";

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
