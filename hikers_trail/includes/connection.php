<?php

define ("DB_SERVER","localhost:8889");
define ("DB_USERNAME","root");
define ("DB_PASSWORD","root");
define ("DB_NAME","hikers_trail");

// Create connection
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

