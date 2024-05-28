<?php
// MySQL connection string
$mysql_connection_string = "mysql://bd85710480f62c:738bba0d@us-cluster-east-01.k8s.cleardb.net/heroku_790f81553aa05f0?reconnect=true";

// Parse the connection string
$parts = parse_url($mysql_connection_string);

// Extract the database credentials
$db_host = $parts['host'];
$db_user = $parts['user'];
$db_pass = $parts['pass'];
$db_name = ltrim($parts['path'], '/');

// Establish database connection.
try {
    $dbh = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>
