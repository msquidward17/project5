<?php
// Database Variables (edit with your own server information)
$server = '66.147.242.186';
$user = 'urcscon3_la';
$pass = 'NotMyPassw0rd!';
$db = 'urcscon3_la';

/* // Bluehost database connection
$server = '66.147.242.186';
$user = 'urcscon3_lap5';
$pass = 'coffeelap5!';
$db = 'urcscon3_lap5'; */

/* // Localhost database information
$server = 'localhost';
$user = 'lap5';
$pass = 'coffeelap5!';
$db = 'lap5';
 */
// Connect to Database
$connection = mysqli_connect($server,$user,$pass,$db);
if (!$connection) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>