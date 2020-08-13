<?php

include_once('class1.php');

// Server Name As a constant
define('serverName','localhost');

// Database Name As a constant
define('dbName','dispatcher');

// Server User Name As a constant
define('dbUser','root');

// Server PASSWORD As a constant
define('dbPass','');

// connecting to the database
$database = new database(serverName,dbUser,dbPass,dbName);
$db = $database->connect();

?>