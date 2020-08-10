<?php

// Define DB Params
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "knovatech");

// Define URL
define("ROOT_PATH", "localhost");
define("ROOT_URL", "http://localhost/");

// toggle this to change the setting
define('DEBUG', true);
// you want all errors to be triggered
error_reporting(E_ALL);

if(DEBUG == true)
{
ini_set('display_errors','On');
}
else
{
ini_set('display_errors','Off');
}

?>
