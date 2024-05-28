<?php
// MySQL connection string
$mysql_connection_string = "mysql:host=us-cluster-east-01.k8s.cleardb.net;port=3306;dbname=heroku_790f81553aa05f0";

// Parse the connection string
$parts = parse_url($mysql_connection_string);

// Extract the database credentials
$db_host = $parts['host'];
$db_port = $parts['port'];
$db_name = ltrim($parts['path'], '/');
$db_user = 'bd85710480f62c';
$db_pass = '738bba0d';

// Establish database connection.
try {
    $dbh = new PDO("mysql:host=$db_host;port=$db_port;dbname=$db_name", $db_user, $db_pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>
