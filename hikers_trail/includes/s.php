<?php

define ("DB_SERVER","178.62.119.110");
define ("DB_USERNAME","cs_student");
define ("DB_PASSWORD","NNBp8NbLpBnAtZwb");
define ("DB_NAME","codespace_academy");

// Create connection
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>