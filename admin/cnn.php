<?php
$servername = "mx50.hostgator.mx";
$username = "alanchat_scadmin";
$password = "Octavio123";
$dbname = "alanchat_santacrz";

// Create connection
global $conn;
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset($conn, 'utf8');

//$con->close();

//Credentials to images:
/*

Host: 192.185.131.131
User: andres.aparicio@santacrz.com
Pwd: Octavio123

*/
?>
