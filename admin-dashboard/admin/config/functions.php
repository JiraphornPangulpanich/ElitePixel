<?php
// Database configuration
$host = '45.154.26.121/phpmyadmin/'; // or your database host
$dbname = 'ElitePixel';
$username = 'root';
$password = '$2y$10$ZZX6KJMJjatPdfN3jDYyM.cePHfV5timlONKuh8Xz4C6HZZ73Ugy2';

try {
    // Create a PDO instance (connect to the database)
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4"; // DSN (Data Source Name)
    $con = new PDO($dsn, $username, $password);
     
    // Set PDO attributes
     $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Enable exceptions on errors
     $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // Set default fetch mode to associative array
     $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // Disable emulation of prepared statements.
     
    // echo "Connected successfully!";

} catch (PDOException $e) {
    // Handle connection error
    echo "Connection failed: " . $e->getMessage();
}
?>
