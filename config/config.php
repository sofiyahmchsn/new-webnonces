<?php
// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'nonces_db');

// Check connection
if(!$conn) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Set character set
mysqli_set_charset($conn, 'utf8');

// Close connection (optional, depending on your usage)
// mysqli_close($conn);
?>
