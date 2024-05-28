<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

define('DB_HOST', $url["host"]);
define('DB_USER', $url["user"]);
define('DB_PASS', $url["pass"]);
define('DB_NAME', substr($url["path"], 1));

// Establish database connection.
try {
    $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>
