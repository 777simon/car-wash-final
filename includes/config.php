<?php
// Use environment variables for database credentials.
$host = getenv('DB_HOST');
$username = getenv('DB_USER');
$password = getenv('DB_PASS');
$database = getenv('DB_NAME');

// Establish database connection.
try {
    $dbh = new PDO("mysql:host=$host;dbname=$database", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>
