<?php
require 'config/config.php';
require 'core/database.php';
require 'controllers/home.php';

$config = config('db');
// init DB connection
// 1
//initGlobalDbConnection($config);
//$db_connect = $global_db_connection;

// 2
//db();
//$db_connect = db($config);

// 3
$db = Database::getInstance($config);
$db_connect = $db->connection;


//indexHome();


indexAd();

