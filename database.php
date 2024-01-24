<?php
$host     = empty(getenv("MYSQL_HOST"))    ? "localhost" : getenv("MYSQL_HOST");
$dbname   = empty(getenv("MYSQL_DBNAME"))  ? "plsres"    : getenv("MYSQL_DBNAME");  
$username = empty(getenv("MYSQL_USERNAME"))? "root"      : getenv("MYSQL_USERNAME");
$password = empty(getenv("MYSQL_PASSWORD"))? ""          : getenv("MYSQL_PASSWORD");

try {
    $conn = new mysqli($host, $username, $password, $dbname);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
