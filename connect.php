<?php
$server = "localhost";
$username = "aditya";
$password = "Lucifer_7003";

// Connecting to database.
$mysql = new mysqli($server, $username, $password);

// Checking for any errors(not working currently).
if ($mysql->connect_errno) {
  die("Connection to database failed due to " . $mysql->connect_error);
}
